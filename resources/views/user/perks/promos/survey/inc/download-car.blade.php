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

<div class="modal fade xp-modal" id="downloadCarModal" tabindex="-1" aria-labelledby="downloadCarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/extranet.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                <span>Extranet Explorer &copy; 3002 | Downloading 0.01&percnt;</span>

                <img src="{{ asset('images/icons/close.png') }}"
                    alt="Close"
                    class="close position-absolute top-0 end-0"
                    data-bs-dismiss="modal"
                    aria-label="Close">
            </div>

            <div class="modal-body p-0 bg-light text-center pt-4 px-4">
                <p>The car is downloading.</p>

                <div class="progress"
                    role="progressbar"
                    aria-valuenow="0"
                    aria-valuemin="0"
                    aria-valuemax="100">

                    <div class="progress-bar" style="width: 0%"></div>
                </div>

                <p>0.01&percnt; complete</p>

                <p id="download-time">
                    Estimated time left: &infin;
                </p>
                <div class="torrent-box my-4 p-3 text-start">

                    <div class="d-flex justify-content-between small mb-2">
                        <span>Seeds: 2</span>
                        <span>Peers: 6</span>
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
                                <td>car_complete_part01.rar</td>
                                <td>Downloading...</td>
                            </tr>
                            <tr>
                                <td>car_complete_part02.rar</td>
                                <td class="text-danger">Corrupted</td>
                            </tr>
                            <tr>
                                <td>DLC_001.rar</td>
                                <td>Queued</td>
                            </tr>
                            <tr>
                                <td>DLC_002.rar</td>
                                <td>Queued</td>
                            </tr>
                            <tr>
                                <td>optional_ITA_language_pack.rar</td>
                                <td>Queued</td>
                            </tr>
                            <tr>
                                <td>manual.zip</td>
                                <td>Queued</td>
                            </tr>
                            <tr>
                                <td>sat_nav_getting_started.zip</td>
                                <td>Stalled</td>
                            </tr>
                            <tr>
                                <td>bonus_features.iso</td>
                                <td>Stalled</td>
                            </tr>
                            <tr>
                                <td>setup.exe</td>
                                <td>Stalled</td>
                            </tr>
                            <tr>
                                <td>activation_service.exe</td>
                                <td>Stalled</td>
                            </tr>
                            <tr>
                                <td>readme.txt</td>
                                <td>Stalled</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="mt-3 small">
                        <p class="mb-1">Download speed: 0.01KB/s</p>
                        <p class="mb-0">Upload speed: 0KB/s</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
const numbers = [2, 3, 4, 3, 2, 3, 4, 5];

const timeElement = document.getElementById('download-time');

let index = 0;
let years = 9;
let days = 0;

// increase years every 30 seconds
setInterval(() => {

    if (years < 27) {
        years++;
    }

}, 30000);


// days
setInterval(() => {

    if (days < 6) {
        days++;
    }

}, 10000);

// update minutes every 3 seconds
setInterval(() => {

    let mins = numbers[index];

    index++;

    // restart when reaching end of array
    if (index >= numbers.length) {
        index = 0;
    }

    timeElement.innerHTML =
        `Estimated time left: ${years}y 7mo 2w ${days}d 21hrs ${mins}m`;

}, 3000);
</script>