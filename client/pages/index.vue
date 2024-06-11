<template>
  <div>
    <section
      class="bg-gradient-to-b relative from-white to-gray-100 py-8 sm:py-16"
    >
      <div class="absolute inset-0">
        <img
          class="w-full h-full object-cover object-top"
          src="/img/pages/ai_form_builder/background-pattern.svg"
          alt="Page abstract background"
        >
      </div>

      <div
        class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto relative -mb-32 md:-mb-52 lg:-mb-72"
      >

        <div class="max-w-4xl mx-auto text-center">
          <h1
            class="text-4xl sm:text-5xl lg:text-6xl font-semibold text-gray-900 tracking-tight"
          >
            INDIAai
            <span
              class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-400"
            >Forms</span>

          </h1>
          <p
            class="mt-4 sm:mt-5 text-base leading-7 sm:text-xl sm:leading-9 font-medium text-gray-500"
          >
            Portal to manage Dynamic Forms for INDIAai

          </p>

          <div class="mt-8 flex justify-center">
            <v-button
              v-if="!authenticated"
              class="mr-1"
              :to="{ name: 'forms-create-guest' }"
              :arrow="true"
            >
              Create a form
            </v-button>
            <v-button
              v-else
              class="mr-1"
              :to="{ name: 'forms-create' }"
              :arrow="true"
            >
              Create a form
            </v-button>
          </div>

          <div class="justify-center flex gap-2 mt-10">
            <div class="flex items-center text-gray-400 text-sm">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-4 h-4 mr-1 ticks"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4.5 12.75l6 6 9-13.5"
                />
              </svg>
              <span>Unlimited forms</span>
            </div>
            <div class="flex items-center text-gray-400 text-sm">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-4 h-4 mr-1 ticks"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4.5 12.75l6 6 9-13.5"
                />
              </svg>
              <span> Unlimited fields </span>
            </div>
            <div class="flex text-gray-400 text-sm">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-4 h-4 mr-1 ticks"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4.5 12.75l6 6 9-13.5"
                />
              </svg>
              <span>Unlimited responses</span>
            </div>
          </div>
        </div>


      </div>
    </section>

  </div>
</template>

<script>
import { computed } from "vue"
import { useAuthStore } from "../stores/auth"
import Features from "~/components/pages/welcome/Features.vue"
import MoreFeatures from "~/components/pages/welcome/MoreFeatures.vue"
import PricingTable from "../components/pages/pricing/PricingTable.vue"
import AiFeature from "~/components/pages/welcome/AiFeature.vue"
import TemplatesSlider from "../components/pages/welcome/TemplatesSlider.vue"
import opnformConfig from "~/opnform.config.js"

export default {
  components: {
    Features,
    MoreFeatures,
    PricingTable,
    AiFeature,
    TemplatesSlider,
  },
  layout: "default",

  setup() {
    const authStore = useAuthStore()
    defineRouteRules({
      swr: 3600,
    })

    return {
      authenticated: computed(() => authStore.check),
      config: opnformConfig,
      runtimeConfig: useRuntimeConfig(),
    }
  },

  data: () => ({}),

  computed: {
    configLinks() {
      return this.config.links
    },
    paidPlansEnabled() {
      return this.runtimeConfig.public.paidPlansEnabled
    },
  },
}
</script>

<style lang="scss" scoped>
.customer-logo-container {
  max-width: 130px;
  width: 100%;
}

.ticks {
  color: #2563eb;
}

@screen md {
  #macbook-video {
    position: absolute;
    max-width: 84.8% !important;
    right: 0px;
    top: 6.8%;
  }
}
</style>
