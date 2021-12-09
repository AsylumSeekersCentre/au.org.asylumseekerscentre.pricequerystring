CRM.$(document).ready(function ($) {
  var objUrlParams = new URLSearchParams(window.location.search);
  selected = parseInt(objUrlParams.get('priceoption'));
  priceSetId = parseInt(objUrlParams.get('priceset'));
  radio = document.getElementById('CIVICRM_QFID_'+selected+'_price_'+priceSetId);
  if (radio != null) {
    radio.click();
  }
  else {
    otherAmount = parseInt(objUrlParams.get('otheramount'));
    if (otherAmount != null && otherAmount > 0) {
      otherAmountInput = document.getElementById('price_'+priceSetId);
      otherAmountInput.value = (otherAmount + '')
      otherAmountInput.click();
      // document.getElementById('first_name').click();
    }
  }
});
