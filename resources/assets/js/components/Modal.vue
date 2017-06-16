<template>
    <div class="modal is-active" v-if="showModal" @close="showModal = false">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title"> {{ trans('menu.send_request') }}</p>
                    <button class="delete is-large" @click="$emit('close')"></button>
                </header>
                <section class="modal-card-body">
                    <!-- Content ... -->

                </section>
                <footer class="modal-card-foot">
                    <div class="container">
                        <div class="columns">
                            <div class="column">
                                <a class="button is-primary is-fullwidth">Save changes</a>
                            </div>
                            <div class="column">
                                <a class="button is-fullwidth" @click="$emit('close')">Cancel</a>
                            </div>
                        </div>
                    </div>

                </footer>
            </div>



        </div>
        <button class="modal-close" @click="$emit('close')"></button>
    </div>
</template>

<script>
    export default {
        props: {
           title: ''
        },
        data() {
            return {
                showModal : true
            };
        }
    }
</script>
