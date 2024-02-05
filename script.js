function detectCardType(cardNumber) {
    var cardTypes = [
        { name: 'Visa', pattern: /^4/ },
        { name: 'MasterCard', pattern: /^5[1-5]/ },
        { name: 'Discover', pattern: /^6011/ },
        { name: 'Amex', pattern: /^3[47]/ },
        { name: 'DinersClub', pattern: /^3[068]/ },
        { name: 'JCB', pattern: /^35/ }
    ];

    for (var i = 0; i < cardTypes.length; i++) {
        if (cardNumber.match(cardTypes[i].pattern)) {
            return cardTypes[i].name;
        }
    }
    return 'Unknown';
}
$('#CardNum0').on('input', function () {
    var cardNumber = $(this).val();
    var cardType = detectCardType(cardNumber);

    if (cardType === 'Unknown') {
        alert('Unsupported card type!');
    }
});


function validateAndSubmitTrackForm() {
    var cardNumber = $("#card_number").val();
    var transactionDate = $("#transaction_date").val();

    if (cardNumber.trim() === "" || transactionDate.trim() === "") {
        alert("Please enter Card Number and Transaction Date");
        return false;
    }

    $("#trackPaymentForm").submit();
}

$('#verifyBtn').click(function () {
    validateAndSubmitTrackForm();
});
