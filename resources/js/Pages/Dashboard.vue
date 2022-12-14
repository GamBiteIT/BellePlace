

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{posts}}
                    </div>
                    <div>
                        {{offers}}
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3'
import pickBy from 'lodash.pickby'
import throttle from 'lodash/throttle'
import mapValues from 'lodash/mapValues'
import Pagination from '@/Shared/Pagination.vue';
import SearchFilterVue from '@/Shared/SearchFilter.vue';







export default {
    components :{
        Head,Link,Pagination,SearchFilterVue,

         AuthenticatedLayout,
    },
    props :{
        filters: Object,
     posts : Object,
     offers : Object,
    },
    data() {
    return {
      form: {
        search: this.filters.search,
      },
    }
  },
  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get('/dashboard', pickBy(this.form), { preserveState: true })
      }, 150),
    },
  },
  methods: {
    reset() {
      this.form = mapValues(this.form, () => null)
    },
  },


}

</script>

