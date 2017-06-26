<div class="modal" id="requestModal" tabindex="-1" role="dialog">
    <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-content"  style="width: 800px;">
            <div class="modal-card"  style="width: 800px;">
                <header class="modal-card-head">
                    <p class="modal-card-title"> {{ trans('menu.send_request') }}</p>
                    <button class="delete is-large close" data-dismiss="modal"></button>
                </header>
                <section class="modal-card-body">
                    @include('contacts.form')
                </section>
                <footer class="modal-card-foot">
                    <div class="container">
                        <div class="columns">
                            <div class="column has-text-centered has-text-dark">
                                <span>{{OUR_COMPANY}}</span>
                            </div>
                        </div>
                    </div>

                </footer>
            </div>



        </div>
        <button class="modal-close" data-dismiss="modal"></button>
    </div>


</div>