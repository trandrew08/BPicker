var caller_hide_element = [];
var index = 0;
var current_element = "#welcome_card";

jQuery("*").on("click", function(){
  jQuery(".navbar-collapse").collapse("hide");
});

jQuery(".navbar-toggle").focusout(function(){
  jQuery(".navbar-collapse").collapse("hide");
});

//#NAV BAR - HOME BUTTON
jQuery("#button_home").on("click", function(){
    jQuery(current_element).hide(400);
    jQuery("#welcome_card").slideDown(400);
    current_element = "#welcome_card";
  if (index != 0){
    index = 0;
    caller_hide_element = [];
  }

});

//NAV BAR - ABOUT BUTTON
jQuery("#button_about").on("click", function(){
    jQuery(current_element).hide(400);
    jQuery("#about_card").slideDown(400);
    current_element = "#about_card";
});

//NAV BAR - CONTACT US BUTTON
jQuery("#button_contact_us").on("click", function(){
    jQuery(current_element).hide(400);
    jQuery("#contact_us_card").slideDown(400);
    current_element = "#contact_us_card";
});

jQuery("#button_start").on("click", function(){
  jQuery("#welcome_card").hide(400);
  jQuery("#database_card").slideDown(400);
  current_element = "#database_card";
});

//DATABASE CARD CALLS
jQuery("#button_yes_1").on("click", function(){
  jQuery("#database_card").hide(400);
  caller_hide_element[index] = "#database_card";
  index++;
  jQuery("#shared_write_access_card").slideDown(400);
  current_element = "#shared_write_access_card";
});

jQuery("#button_no_1").on("click", function(){
  jQuery("#database_card").hide(400);
  caller_hide_element[index] = "#database_card";
  index++;
  jQuery("#no_blockchain_card").slideDown(400);
  current_element = "#no_blockchain_card";
});

//SHARED WRITE ACCESS CALLS
jQuery("#button_yes_2").on("click", function(){
  jQuery("#shared_write_access_card").hide(400);
  caller_hide_element[index] = "#shared_write_access_card";
  index++;
  jQuery("#trusted_participant_card").slideDown(400);
  current_element = trusted_participant_card;
});

jQuery("#button_no_2").on("click", function(){
  jQuery("#shared_write_access_card").hide(400);
  caller_hide_element[index] = "#shared_write_access_card";
  index++;
  jQuery("#no_blockchain_card").slideDown(400);
  current_element = "#no_blockchain_card";
});

jQuery("#button_back_shared_write_access").on("click", function(){
  jQuery("#shared_write_access_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});

//TRUSTED PARTICIPANT CARD
jQuery("#button_yes_3").on("click", function(){
  jQuery("#trusted_participant_card").hide(400);
  caller_hide_element[index] = "#trusted_participant_card";
  index++;
  jQuery("#unified_interest_participant_card").slideDown(400);
  current_element = "#unified_interest_participant_card";
});

jQuery("#button_no_3").on("click", function(){
  jQuery("#trusted_participant_card").hide(400);
  caller_hide_element[index] = "#trusted_participant_card";
  index++;
  jQuery("#trusted_third_party_card").slideDown(400);
  current_element = "#trusted_third_party_card";
});

jQuery("#button_back_trusted_participant").on("click", function(){
  jQuery("#trusted_participant_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});

//UNIFIED INTEREST PARTICIPANT CARD
jQuery("#button_yes_4").on("click", function(){
  jQuery("#unified_interest_participant_card").hide(400);
  caller_hide_element[index] = "#unified_interest_participant_card";
  index++;
  jQuery("#no_blockchain_card").slideDown(400);
  current_element = "#no_blockchain_card";
});

jQuery("#button_no_4").on("click", function(){
  jQuery("#unified_interest_participant_card").hide(400);
  caller_hide_element[index] = "#unified_interest_participant_card";
  index++;
  jQuery("#trusted_third_party_card").slideDown(400);
  current_element = "#trusted_third_party_card";
});

jQuery("#button_back_unified_interest_participant").on("click", function(){
  jQuery("#unified_interest_participant_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});


//TRUSTED THIRD PARTY CARD
jQuery("#button_yes_5").on("click", function(){
  jQuery("#trusted_third_party_card").hide(400);
  caller_hide_element[index] = "#trusted_third_party_card";
  index++;
  jQuery("#no_blockchain_card").slideDown(400);
  current_element = "#no_blockchain_card";
});

jQuery("#button_no_5").on("click", function(){
  jQuery("#trusted_third_party_card").hide(400);
  caller_hide_element[index] = "#trusted_third_party_card";
  index++;
  jQuery("#functionality_control_card").slideDown(400);
  current_element = "#functionality_control_card";
});

jQuery("#button_back_trusted_third_party").on("click", function(){
  jQuery("#trusted_third_party_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});


//FUNCTIONALITY CONTROL CARD
jQuery("#button_yes_6").on("click", function(){
  jQuery("#functionality_control_card").hide(400);
  caller_hide_element[index] = "#functionality_control_card";
  index++;
  jQuery("#consensus_card").slideDown(400);
  current_element = "#consensus_card";
});

jQuery("#button_no_6").on("click", function(){
  jQuery("#functionality_control_card").hide(400);
  caller_hide_element[index] = "#functionality_control_card";
  index++;
  jQuery("#transaction_mode_card").slideDown(400);
  current_element = "#transaction_mode_card";
});

jQuery("#button_back_functionality_control").on("click", function(){
  jQuery("#functionality_control_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});


//CONSENSUS CARD
jQuery("#button_intra").on("click", function(){
  jQuery("#consensus_card").hide(400);
  caller_hide_element[index] = "#consensus_card";
  index++;
  jQuery("#private_blockchain_card").slideDown(400);
  current_element = "#private_blockchain_card";
});

jQuery("#button_inter").on("click", function(){
  jQuery("#consensus_card").hide(400);
  caller_hide_element[index] = "#consensus_card";
  index++;
  jQuery("#hybrid_blockchain_card").slideDown(400);
  current_element = "#hybrid_blockchain_card";
});

jQuery("#button_back_consensus").on("click", function(){
  jQuery("#consensus_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});


//TRANSACTION MODE CARD
jQuery("#button_public").on("click", function(){
  jQuery("#transaction_mode_card").hide(400);
  caller_hide_element[index] = "#transaction_mode_card";
  index++;
  jQuery("#public_blockchain_card").slideDown(400);
  current_element = "#public_blockchain_card";
});

jQuery("#button_private").on("click", function(){
  jQuery("#transaction_mode_card").hide(400);
  caller_hide_element[index] = "#transaction_mode_card";
  index++;
  jQuery("#consensus_card").slideDown(400);
  current_element = "#consensus_card";
});

jQuery("#button_back_transaction_mode").on("click", function(){
  jQuery("#transaction_mode_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});

//PUBLIC NETWORK CARD
jQuery("#button_back_public_blockchain").on("click", function(){
  jQuery("#public_blockchain_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});
jQuery("#button_reset_public_blockchain").on("click", function(){
  index = 0;
  caller_hide_element = [];
  jQuery("#public_blockchain_card").hide(400);
  jQuery("#database_card").slideDown(400);
  current_element = "#database_card";
});


//PRIVATE NETWORK CARD
jQuery("#button_back_private_blockchain").on("click", function(){
  jQuery("#private_blockchain_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});
jQuery("#button_reset_private_blockchain").on("click", function(){
  index = 0;
  caller_hide_element = [];
  jQuery("#private_blockchain_card").hide(400);
  jQuery("#database_card").slideDown(400);
  current_element = "#database_card";
});


//PUBLIC NETWORK CARD
jQuery("#button_back_hybrid_blockchain").on("click", function(){
  jQuery("#hybrid_blockchain_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});
jQuery("#button_reset_hybrid_blockchain").on("click", function(){
  index = 0;
  caller_hide_element = [];
  jQuery("#hybrid_blockchain_card").hide(400);
  jQuery("#database_card").slideDown(400);
  current_element = "#database_card";
});

//NO BLOCKCHAIN CARD
jQuery("#button_back_no_blockchain").on("click", function(){
  jQuery("#no_blockchain_card").hide(400);
  index--;
  jQuery(caller_hide_element[index]).slideDown(400);
  current_element = caller_hide_element[index];
});


//SELECTABLE FUNCTION
$(function(){
  $(".selectable").selectable();
});
