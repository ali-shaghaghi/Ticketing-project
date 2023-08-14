<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'title'       => ['required','string','max:255'],
            'description' => ['required','string'],
            'attachment'  => ['sometimes','file','mimes:jpg,jpeg,pdf'],
        ];
    }
    public function messages()
    {
      return [
        'title.required' => 'لطفا عنوان مطلب را وارد کنید',
        'title.max' => 'عنوان مطلب شما باید کمتراز 255 کاراکتر باشد',
        'title.string' => 'درعنوان مطلب باید از حروف استفاده کنید',
        'description.string' => 'درتوضیحات مطلب باید از حروف استفاده کنید',
        'description.required' => 'لطفا توضیحات مطلب را وارد کنید',
        'attachment.mimes' => 'از فرمت های زیر برای ارسال اسفاده کنیدjpg jpeg pdf',
        'attachment.file' => 'فیلد پیوست باید یک فایل باشد'
      ];
    }

}
