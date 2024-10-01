<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <transition name="slide-fade" @after-enter="clearAlert">
                        <div v-if="showAlert" class="fixed top-5 right-5 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md shadow-lg z-50">
                            <div class="flex items-center">
                                <FontAwesomeIcon icon="fas fa-smile" class="h-6 w-6 text-yellow-500 mr-3" />
                                <p class="text-sm font-medium">Transaction successfully added!</p>
                            </div>
                        </div>
                    </transition>

                    <div class="flex flex-col items-center justify-center z-index">
                          <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                            style="transform: scale(1.5); opacity: 0.1;">
                            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
                        </svg>
                        <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-lg bg-orange-500">
                          
                            <h1 class="text-2xl font-bold mb-6 text-center text-white">Catat Transaksimu</h1>
                            <form @submit.prevent="submitForm" class="space-y-4">
                                <div>
                                    <label for="transactionType" class="block text-sm font-medium text-white">Transaction Type</label>
                                    <select v-model="form.transactionType" id="transactionType" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        <option value="" disabled>Select transaction type</option>
                                        <option value="income">Income</option>
                                        <option value="expense">Expense</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="category" class="block text-sm font-medium text-white">Category</label>
                                    <input v-model="form.category" id="category" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                                </div>

                                <div>
                                    <label for="amount" class="block text-sm font-medium text-white">Amount</label>
                                    <input type="number" v-model="form.amount" id="amount" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                                </div>

                                <div>
                                    <label for="date" class="block text-sm font-medium text-white">Date</label>
                                    <input type="date" v-model="form.date" id="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                                </div>

                                <div>
                                    <label for="description" class="block text-sm font-medium text-white">Description</label>
                                    <textarea v-model="form.description" id="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save Transaction
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref } from 'vue'
import { useForm, usePage, Link } from '@inertiajs/vue3'

const form = useForm({
    transactionType: '',
    category: '',
    date: '',
    amount: '',
    description: ''
})

const showAlert = ref(false)

const submitForm = () => {
    form.post('/transaction', {
        onSuccess: () => {
            form.reset() // Reset form fields after successful submission
            showAlert.value = true; // Show notification
            setTimeout(() => {
                showAlert.value = false;
            }, 3000)
        }
    })
}
</script>
