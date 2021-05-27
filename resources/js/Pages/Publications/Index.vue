<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tweets</h2>
    </template>

    <publication-create></publication-create>

    <div class="py-12">
      <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div
          v-for="publication in publications"
          :key="publication.id"
          class="flex items-center space-x-4 bg-white overflow-hidden rounded rounded-b-none border-b-2 border-gray-200 py-6 px-4"
        >
          <img
            class="h-16 w-16 object-cover rounded-full"
            :src="publication.user.profile_photo_url"
          />
          <div class="flex flex-col w-2/3">
            <div>
              <a class="text-sm text-gray-900 font-bold hover:text-blue-400">
                {{ publication.user.name }}
              </a>
              <span class="font-thin text-gray-400"
                >· le {{ publication.created_at }}</span
              >
            </div>

            <h3 class="text-xs font-bold text-gray-700">
              {{ publication.title }}
            </h3>

            <div class="text-sm text-gray-400 font-thin">
              {{ publication.content }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import PublicationCreate from "@/Pages/Publications/Create";

export default {
  components: {
    AppLayout,
    PublicationCreate,
  },

  props: {
    publications: Array,
  },
};
</script>
