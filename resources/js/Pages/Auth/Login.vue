<script setup>
    import BreezeButton from '@/Components/Button.vue';
    import BreezeCheckbox from '@/Components/Checkbox.vue';
    import BreezeGuestLayout from '@/Layouts/Guest.vue';
    import BreezeInput from '@/Components/Input.vue';
    import BreezeLabel from '@/Components/Label.vue';
    import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
    import RegisterPage from '@/Pages/Auth/Register';
    import {
        Head,
        Link,
        useForm
    } from '@inertiajs/inertia-vue3';

    defineProps({
        canResetPassword: Boolean,
        status: String,
    });

    const form = useForm({
        email: '',
        password: '',
        remember: false
    });

    const submit = () => {
        form.post(route('login'), {
            onFinish: () => form.reset('password'),
        });
    };

</script>

<template>
    <BreezeGuestLayout>

        <Head title="Log in" />

        <BreezeValidationErrors class="mb-4" />

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="login-reg-bg">
                <div class="log-reg-area sign">
                    <h2 class="log-title">Login</h2>
                    <p>
                        Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join
                            now</a>
                    </p>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" id="input" required="required" />
                            <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" required="required" />
                            <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>Always
                                Remember Me.
                            </label>
                        </div>
                        <a href="#" title="" class="forgot-pwd">Forgot Password?</a>
                        <div class="submit-btns">
                            <button class="mtr-btn signin" type="button"><span>Login</span></button>
                            <button class="mtr-btn signup" type="button"><span>Register</span></button>
                        </div>
                    </form>
                </div>
                <div class="log-reg-area reg">
                    <h2 class="log-title">Register</h2>
                    <p>
                        Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join
                            now</a>
                    </p>
                    <RegisterPage />
                </div>
            </div>
        </div>
    </BreezeGuestLayout>
</template>
