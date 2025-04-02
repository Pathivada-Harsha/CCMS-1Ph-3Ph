<div class="modal fade" id="powerfailureModal" tabindex="-1" aria-labelledby="powerfailureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="powerfailureModalLabel">Power failure Devices</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12 p-0">
                    <div class="table-responsive-1 rounded mt-2 border ">
                        <table class="table table-striped table-type-1 w-100 text-center">
                            <thead>
                                <tr>
                                    <th class="bg-secondary-subtle" scope="col">Device ID</th>
                                    <th class="bg-secondary-subtle" scope="col">Device Name</th>                                    
                                    <th class="bg-secondary-subtle col-size-1" scope="col">Last Record Updated</th>
                                    <th class="bg-secondary-subtle col-size-1" scope="col">Last Communication at</th>
                                    <th class="bg-secondary-subtle" scope="col">Status</th>
                                    <th class="bg-secondary-subtle" scope="col">Location</th>
                                </tr>
                            </thead>
                            <tbody id="power_fail_devices_table">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>