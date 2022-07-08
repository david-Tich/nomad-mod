<div class="flexbox-annotated-section">
    <div class="flexbox-annotated-section-annotation">
        <div class="annotated-section-title pd-all-20">
            <h2>{{ trans('plugins/member::settings.title') }}</h2>
        </div>
        <div class="annotated-section-description pd-all-20 p-none-t">
            <p class="color-note">{{ trans('plugins/member::settings.description') }}</p>
        </div>
    </div>

    <div class="flexbox-annotated-section-content">
        <div class="wrapper-content pd-all-20">
            <div class="form-group mb-3">
                <div class="form-group mb-3">
                    <input type="hidden" name="verify_account_email" value="0">
                    <label>
                        <input type="checkbox"  value="1" @if (setting('verify_account_email', 0)) checked @endif name="verify_account_email">
                        {{ trans('plugins/member::settings.verify_account_email') }}
                    </label>
                    <span class="help-ts">{{ trans('plugins/member::settings.verify_account_email_description') }}</span>
                </div>
            </div>

            @if (is_plugin_active('captcha'))
                <div class="form-group mb-3">
                    <input type="hidden" name="member_enable_recaptcha_in_register_page" value="0">
                    <label>
                        <input type="checkbox"  value="1" @if (setting('member_enable_recaptcha_in_register_page', 0)) checked @endif name="member_enable_recaptcha_in_register_page">
                        {{ trans('plugins/member::settings.enable_recaptcha_in_register_page') }}
                    </label>
                    <span class="help-ts">{{ trans('plugins/member::settings.enable_recaptcha_in_register_page_description') }}</span>
                </div>
            @endif
        </div>
    </div>
</div>
