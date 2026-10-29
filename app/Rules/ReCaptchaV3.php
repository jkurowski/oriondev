<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class ReCaptchaV3 implements Rule
{
    private ?string $action = null;
    private ?float $minScore = null;

    public function __construct(?string $action = null, ?float $minScore = null)
    {
        $this->action = $action;
        $this->minScore = $minScore;
    }

    /**
     * reCAPTCHA is active only when both keys are set in the admin panel.
     * The front form uses the same condition to render the reCAPTCHA button.
     */
    public static function enabled(): bool
    {
        return settings()->get('recaptcha_site_key') && settings()->get('recaptcha_secret_key');
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        try {
            $siteVerify = Http::asForm()->timeout(10)->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => settings()->get('recaptcha_secret_key'),
                'response' => $value,
                'remoteip' => request()->ip(),
            ]);
        } catch (Throwable $e) {
            $this->log('siteverify request failed', ['exception' => $e->getMessage()]);
            return false;
        }

        if ($siteVerify->failed()) {
            $this->log('siteverify HTTP error', ['status' => $siteVerify->status()]);
            return false;
        }

        $body = $siteVerify->json() ?? [];

        if (($body['success'] ?? false) !== true) {
            $this->log('token rejected', ['error-codes' => $body['error-codes'] ?? []]);
            return false;
        }

        if (!is_null($this->action) && $this->action != ($body['action'] ?? null)) {
            $this->log('action mismatch', ['expected' => $this->action, 'action' => $body['action'] ?? null]);
            return false;
        }

        if (!is_null($this->minScore) && $this->minScore > ($body['score'] ?? 0)) {
            $this->log('score too low', ['min' => $this->minScore, 'score' => $body['score'] ?? null]);
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Nie udało się potwierdzić, że nie jesteś robotem. Odśwież stronę i spróbuj ponownie.';
    }

    private function log(string $reason, array $context = []): void
    {
        Log::channel('recaptcha')->warning('reCAPTCHA: ' . $reason, $context + [
            'ip' => request()->ip(),
            'url' => request()->fullUrl(),
            'user_agent' => request()->userAgent(),
        ]);
    }
}
