<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Include Font Awesome if not already included -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <script src="bootstrap-5.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <title>Card</title>
</head>

<body>
    <div class="form">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="make-tab" data-bs-toggle="tab" data-bs-target="#make-tab-pane"
            type="button" role="tab" aria-controls="make-tab-pane" aria-selected="true">Make Payment</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="track-tab" data-bs-toggle="tab" data-bs-target="#track-tab-pane"
            type="button" role="tab" aria-controls="track-tab-pane" aria-selected="false">Track Payment</button>
    </li>
</ul>

        <div class="tab-content" id="myTabContent">
            <!-- make payment -->
            <!-- make payment -->
<div class="tab-pane fade show active" id="make-tab-pane" role="tabpanel" aria-labelledby="make-tab" tabindex="0">
    <br>
    <p class="para">Provide your Card payment details</p>
    <hr>

    <div class="form-group form-center">
        <label for="CardNum0" class="col-sm-4 control-label">Pay via</label>
        <div class="col-sm-7 clearfix block-section">
            <div class="media active">
                <label>
                    <div class="media-body">
                        <h5>Card Number <input type="radio" name="paywith" value="card" checked=""> </h5>
                        <p class="text-muted">Enter Credit Card number you wish to make the payment for.</p>
                    </div>
                </label>
            </div>
            <div class="media">
                <label>
                    <div class="media-body">
                        <h5>Account Number <input type="radio" name="paywith" value="account"> </h5>
                        <p class="text-muted">Enter Card Account Number you wish to make the payment for.</p>
                    </div>
                </label>
            </div>
        </div>
    </div>

    <div class="pay-card">
        <!-- Credit Card Payment Section -->
        <div data-role="cardlist" class="form-group form-center noquickPayCard">
            <label for="CardNum0" class="col-sm-4 control-label">Credit Card Number</label>
            <div class="col-sm-7 clearfix">
                <input type="tel" maxlength="19" name="CardNum0" id="CardNum0"
                    class="form-control col-md-3 col-xs-3 col-sm-3" placeholder="Enter Credit Card number"
                    ondrag="return false;" ondrop="return false;">
            </div>
        </div>

        <div class="form-group form-center row cardVerifier">
            <label for="CardNum1" class="col-sm-4 control-label">Re-enter Credit Card Number</label>
            <div class="col-sm-7 clearfix">
                <input type="tel" maxlength="19" name="CardNum1" id="CardNum1"
                    class="form-control col-md-3 col-xs-3 col-sm-3" placeholder="Re-enter Credit Card number"
                    ondrag="return false;" ondrop="return false;">
            </div>
        </div>
    </div>

<div class="form-group form-center ">
    <label for="additional_info8" class="col-sm-4 control-label">Mobile Number</label>
    <div class="col-sm-4 input-group">
        <div class="input-group-addon">+91</div>
        <input type="tel" class="form-control" id="additional_info8" name="additional_info8"
            placeholder="Enter mobile" maxlength="10" autocomplete="off">
    </div>
</div>

<h6 class="d-sm-none">Amount to Pay</h6>
<div class="wrapper">
    <div class="form-group form-center" style="margin: 1rem 0px;">
        <label for="email" class="col-sm-4 control-label d-sm-block">Amount To Pay</label>
        <div class="input-group col-sm-7 col-xs-12">
            <div class="input-group-addon" style="width:50px;"><i class="fa fa-inr" style="font-size:16px"></i></div>
            <input type="tel" class="form-control" id="txn_amount" name="txn_amount" maxlength="10"
                placeholder="Enter amount" onblur="checkAmount(this)">
        </div>
    </div>
</div>

<h6 class="d-sm-none">Payment Options</h6>
<div class="wrapper">
    <div class="input-group col-sm-12" style="width: 100%;">
        <div class="form-group form-center payOption">
            <label class="col-sm-4 control-label" style="color: #333;">Pay From</label>
            <div class="input-group col-sm-7 col-xs-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <!-- Include your payment options here -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-netbanking-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-netbanking" type="button" role="tab"
                            aria-controls="pills-netbanking" aria-selected="true">Internet Banking</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-debit-tab" data-bs-toggle="pill" data-bs-target="#pills-debit"
                            type="button" role="tab" aria-controls="pills-debit" aria-selected="false">Debit Card</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">UPI</button>
                    </li>
                    <!-- Add more payment options as needed -->
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Include the corresponding content for each payment option -->
                    <!-- Internet Banking Content -->
                    <div class="tab-pane fade show active" id="pills-netbanking" role="tabpanel"
                        aria-labelledby="pills-netbanking-tab" tabindex="0">
                        <div class="btn-group btn-group-justified" role="group" id="banklogo"
                            style="margin-bottom: 0px;">
                            <!-- Include bank logos or buttons for internet banking options -->
                            <!-- Example: State Bank of India (SBI) -->
                            <button id="sbi" data-bankid="SBI" type="button" class="btn btn-group btn-default">
                                <img src="assets/images/banklogo/sbi.png" height="30" alt="SBI Bank">
                            </button>
                            <!-- Add more bank buttons as needed -->
                        </div>
                        <!-- Include a dropdown or list of available internet banking options -->
                        <div class="selectContainer">
                            <select name="bank_selection" id="bank_selection" class="form-control">
                                <option value="0">----- Select Pay Option -----</option>
                                <!-- Include your internet banking options here -->
                                <option value="SBI">SBI NetBanking</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>

                    <!-- Debit Card Content -->
                    <div class="tab-pane fade" id="pills-debit" role="tabpanel" aria-labelledby="pills-debit-tab"
                        tabindex="0">
                        <div class="selectContainer">
                            <!-- Include a dropdown or list of available debit card options -->
                            <select name="card_selection" id="card_selection" class="form-control">
                                <option value="0">----- Select your Bank -----</option>
                                <!-- Include your debit card options here -->
                                <option value="BD3">BOB Debit Card</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>

                    <!-- UPI Content -->
                    <div class="tab-pane fade" id="pills-upi" role="tabpanel" aria-labelledby="pills-upi-tab"
                        tabindex="0">
                        <!-- Include UPI-specific content here -->
                        <div class="text-center" id="upiopt">
                            <img src="https://pgi.billdesk.com/pgmerc/sbicard/resources/images/banklogo/upi.png"
                                alt="UPI" height="20"> 
                            - Unified Payment Interface
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div><!-- ... (head section with Bootstrap and FontAwesome links) ... -->

<!-- track payment -->
<div class="tab-pane fade" id="track-tab-pane" role="tabpanel" aria-labelledby="track-tab" tabindex="0">
    <br>
    <p class="para">Check your last transaction status</p>
    <hr>
    <div class="row transdetails">
        <div class="form-group row">
            <label for="card_number" class="col-sm-4 col-form-label">Card number</label>
            <div class="col-sm-7">
                <input type="tel" class="form-control" id="card_number" name="card_number" placeholder="Enter Card Number" maxlength="19">
            </div>
        </div>

        <div class="form-group row">
            <label for="transaction_date" class="col-sm-4 col-form-label" style="padding-top:5px;">Transaction Date<br><span class="text-muted">(DD/MM/YYYY)</span></label>
            <div class="col-sm-7">
                <div class="input-group">
                    <input type="date" class="form-control date-picker" id="transaction_date" name="transaction_date" placeholder="DD/MM/YYYY" maxlength="10">
                    <label for="transaction_date" class="input-group-text"><i class="fas fa-calendar"></i></label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-7">
                <div class="btnSection">
                    <input name='msgcode' type="hidden" value="">
                    <button type="button" onClick="verifyTrxnDetails()" id="verifyBtn" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

        <div class="small" style="padding-top:5px;">
            Disclaimer: You will be able to view the transaction details for the last 30 days. Information on your payment status is made available to you by BillDesk.
        </div>
    </div>
</div>
        </div>
    </div>
</body>

</html>
