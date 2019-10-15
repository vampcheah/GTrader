<div class="col-sm-6 editable container">
    <div class="row">
        <div class="col-sm-8">
            <strong>More Exchanges</strong>
        </div>
        <div class="col-sm-4">
            <div class="form-group editbuttons">
                <button type="button"
                        class="btn btn-primary btn-mini editbutton trans"
                        title="Configure More Exchanges"
                        onClick="window.GTrader.request(
                            'exchange',
                            'form',
                            'id={{ $exchange->getId() }}',
                            'GET',
                            'settingsTab'
                        )">
                    <span class="fas fa-wrench"></span> Configure More Exchanges
                </button>
            </div>
        </div>
    </div>
</div>
