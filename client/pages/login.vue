<template>
  <div>
    <div class="flex mt-6 mb-10">
      <div
        class="w-full md:max-w-6xl mx-auto px-4 flex md:flex-row-reverse flex-wrap"
      >
        <div class="w-full md:w-1/2 md:p-6">
          <div class="border rounded-md p-6 shadow-md sticky top-4">
            <h2 class="font-semibold text-2xl">
              Login to OpnForm
            </h2>
            <small>Welcome back! Please enter your details.</small>

            <login-form />
          </div>
        </div>
        <div class="w-full md:w-1/2 md:p-6 mt-8 md:mt-0">
          <h1 class="font-bold">
            INDIAai Forms
          </h1>


        </div>
      </div>
    </div>
    <open-form-footer />
  </div>
</template>

<script setup>
import LoginForm from "~/components/pages/auth/components/LoginForm.vue"

definePageMeta({
  middleware: "guest",
})
useOpnSeoMeta({
  title: "Login",
})
</script>
