<?php

namespace App\Http\Requests;

use App\Rules\ReCaptchaV3;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email:rfc',
            'message' => 'required',
            'phone' => 'required',
            'page' => '',
            'rule_1' => 'integer',
            'rule_2' => 'integer',
            'rule_6' => 'integer',
            'investment_name' => 'sometimes|string|max:255',
            'property_name' => 'sometimes|string|max:255',
            'investment_id' => 'sometimes|integer',
        ];

        if (ReCaptchaV3::enabled()) {
            $rules['g-recaptcha-response'] = ['required', new ReCaptchaV3()];
        }

        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        if ($validator->errors()->has('g-recaptcha-response') && !$this->filled('g-recaptcha-response')) {
            Log::channel('recaptcha')->warning('reCAPTCHA: missing token', [
                'ip' => $this->ip(),
                'url' => $this->fullUrl(),
                'user_agent' => $this->userAgent(),
            ]);
        }

        parent::failedValidation($validator);
    }

    public function messages()
    {
        return [
            'name.required' => 'Podaj imię',
            'email.required' => 'Podaj adres e-mail',
            'email.email' => 'Podaj poprawny adres e-mail',
            'message.required' => 'Wpisz wiadomość',
            'phone.required' => 'Podaj numer telefonu',
            'g-recaptcha-response.required' => 'Nie udało się potwierdzić, że nie jesteś robotem. Odśwież stronę i spróbuj ponownie. Jeśli używasz blokera reklam, wyłącz go dla tej strony.',

            'rule_1.integer' => 'Nieprawidłowa wartość',
            'rule_2.integer' => 'Nieprawidłowa wartość',
            'rule_6.integer' => 'Nieprawidłowa wartość',
            'investment_id.integer' => 'Nieprawidłowa wartość',

            'investment_name.max' => 'Nazwa inwestycji może mieć maksymalnie 255 znaków',
            'property_name.max' => 'Nazwa nieruchomości może mieć maksymalnie 255 znaków',
        ];
    }
}
