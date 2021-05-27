<template>
  <div class="py-6">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
      <form @submit.prevent="pubStore">
        <textarea
          v-model="content"
          ref="tweetTextarea"
          placeholder="Description de votre publication"
          class="rounded-lg border border-gray-200 w-full p-2 font-semibold resize-none focus:outline-none"
        ></textarea>
        <span v-if="$page.errors.content">
          {{ $page.errors.content }}
        </span>
        <div class="flex items-center space-x-4 justify-end mt-3">
          <p class="text-sm text-gray-400 font-thin">300 caractères restants</p>
          <button-vue
            class="bg-blue-500 hover:bg-blue-800 rounded-full font-extrabold"
          >
            Publier
          </button-vue>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Button from "../../Jetstream/Button.vue";

export default {
  components: { ButtonVue: Button },
  data() {
    return {
      content: "",
    };
  },
  methods: {
    pubStore() {
      this.$inertia.post(
        "publications",
        { content: this.content },
        { preserveState: false }
      );
    },
  },
};
</script>
