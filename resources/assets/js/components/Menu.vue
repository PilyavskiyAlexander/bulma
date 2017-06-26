<template>
    <header class="container is-fluid is-marginless">
        <nav class="nav">
            <div class="nav-left">
                <a class="nav-item" href="/">
                    <b class="logo">IMPEXRON GMBH</b>
                </a>
            </div>


            <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
            <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
            <span class="nav-toggle" :class="{'is-active': isActive}" @click="toggleActive">
                <span></span>
                <span></span>
                <span></span>
            </span>

            <!-- This "nav-menu" is hidden on mobile -->
            <!-- Add the modifier "is-active" to display it on mobile -->
            <div class="nav-right nav-menu" :class="{'is-active': isActive}">

                <a class="nav-item is-tab " href="/">
                    {{ trans('menu.main') }}
                </a>
                <a class="nav-item is-tab" href="/products">
                    {{ trans('menu.products') }}
                </a>
                <a class="nav-item is-tab" href="/brands">
                    {{ trans('menu.brands') }}
                </a>
                <a class="nav-item is-tab" href="/contacts">
                    {{ trans('menu.contacts') }}
                </a>
                <div class="nav-item is-tab">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="button is-primary"  data-toggle="modal" data-target="#requestModal">
                                <span>{{ trans('menu.send_request') }}</span>
                            </a>
                        </p>
                    </div>
                </div>
                <form class="nav-item" id="demo-2" action="/search" method="get">
                    <input type="search" class="header_search" name="search">
                </form>
            </div>
        </nav>
        <modal v-if="showModal" @close="showModalFalse"></modal>
    </header>
</template>

<script>
    export default {
        data() {
            return{
                isActive: false,
                showModal: false
            };
        },
        methods: {
            toggleActive: function() {
                this.isActive == true ? this.isActive = false : this.isActive = true
            },
            showModalFalse: function() {
                this.showModal = false;
            },
            showModalTrue : function () {
                this.showModal = true;
            }
        },

    }
</script>
