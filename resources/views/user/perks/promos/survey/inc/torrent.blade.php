<style>
.torrent-box {
    background: #efefef;
    border: 1px solid #b5b5b5;
    font-family: monospace;
    font-size: 13px;
}

.torrent-table td,
.torrent-table th {
    background: transparent !important;
    font-size: 12px;
}

</style>

<div class="modal fade xp-modal" id="torrentModal" tabindex="-1" aria-labelledby="torrentCarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/extranet.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                <span>Extranet Explorer &copy; 3002 | Downloading 0&percnt;</span>

                <img src="{{ asset('images/icons/close.png') }}"
                    alt="Close"
                    class="close position-absolute top-0 end-0"
                    data-bs-dismiss="modal"
                    aria-label="Close">
            </div>
            <div class="modal-body p-0 bg-light text-center pt-4 px-4">
                <p>The file is downloading.</p>

                <div class="progress"
                    role="progressbar"
                    aria-valuenow="0"
                    aria-valuemin="0"
                    aria-valuemax="100">

                    <div class="progress-bar" style="width: 0%"></div>
                </div>

                <p>0&percnt; complete</p>

                <p>
                    Estimated time left: &infin;
                </p>
                <div class="torrent-box my-4 p-3 text-start">

                    <div class="d-flex justify-content-between small mb-2">
                        <span>Seeds: 0</span>
                        <span>Peers: 0</span>
                    </div>

                    <table class="table table-sm mb-0 torrent-table">
                        <thead>
                            <tr>
                                <th>File</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody id="torrent-files">
                            <tr>
                                <td>browser_toolbar_v2FINAL&lpar;1&rpar;.rar</td>
                                <td>Stalled</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="mt-3 small">
                        <p class="mb-1">Download speed: 0KB/s</p>
                        <p class="mb-0">Upload speed: 0KB/s</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>