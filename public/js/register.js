$(document).ready(function(){
    var accountInfoForm = $("#accountInfoRegis");
    var personalDetailForm = $("#personalDetailRegis");
    var companyInfoForm = $("#companyInfoRegis");
    var step1link = $("#nav-item-step-1 > a");
    var step2link = $("#nav-item-step-2 > a");
    var step3link = $("#nav-item-step-3 > a");
    var step = 1;
    var token = $('input[name ="_token"]').val();

    showRegisForm(accountInfoForm);

    $("#nextStep").click(function(){
        loadNextStep(step);

    });

    $("#en-tab").click(function () {
        $("#frenchLogoCard").hide();
        $("#englishLogoCard").show();
    });

    $("#fr-tab").click(function () {
        $("#englishLogoCard").hide();
        $("#frenchLogoCard").show();
    });

    $("#en-logo").change(function() {
        readEnLogo(this);
    });
    $("#fr-logo").change(function() {
        readFrLogo(this);
    });

    $("#selectCountry").change(function(){
        var country_id = $("#selectCountry").val();
        if(country_id != 0){
            getProvinces(country_id);
        }
    });

    function loadNextStep(step){
        if(step ==1 ){
            checkStep1();
        }else if(step == 2){
            checkStep2();
        }else if(step == 3){
            checkStep3();
        }else{

        }
    }
    function checkStep1(){
        var email = $("#email").val();
        if(email != ""){
            $("#emptyEmailMsg").hide();
            checkIfEmailExist(email);
        }else{
            $('#emptyEmailMsg').show();
        }
    }

    function checkIfEmailExist(email){

        $.ajax({
            method:"POST",
            url:"http://192.168.10.10/ajax/register/email",
            data:{
                "_token":token,
                "email":email
            }
        }).done(function(msg){
            if(msg==0){
                $("#inputEmailDiv > span").hide()
                verifylang();
            }else{
                $("#inputEmailDiv > span").show();
            }
        });
    }

    function verifylang(){
        var lang = $("#selectLanguage").val();
        if(lang == 'en' || lang == 'fr'){
            verifyPassword();
        }else{
            $('#inputLangDiv > span').show();
        }
    }

    function verifyPassword(){
        var pass = $("#password").val();
        var confirm = $("#password-confirm").val();
        if(pass != ""){
            $("#inputPasswordDiv > span").hide();
            if(pass == confirm){
                $("#inputConfirmPasswordDiv > span").hide();
                step++;
                loadStep2();
            }else{
                $("#inputConfirmPasswordDiv > span").show();
            }
        }else{
            $("#inputPasswordDiv > span").show();
        }
    }

    function loadStep2(){
        hideRegisForm(accountInfoForm);
        showRegisForm(personalDetailForm);
        disabledLink(step1link);
        activeLink(step2link);
    }
    function checkStep2() {
        verifyFirstName();
    }

    function verifyFirstName() {
        var firstName = $("#firstName").val();
        if(firstName != ""){
            $("#inputFirstNameDiv > span").hide();
            verifyLastName();
        }else{
            $("#inputFirstNameDiv > span").show();
        }
    }

    function verifyLastName(){
        var lastName = $("#lastName").val();
        if(lastName != ""){
            $("#inputLastNameDiv > span").hide();
            verifyPhone();
        }else{
            $("#inputLastNameDiv > span").show();
        }
    }

    function verifyPhone(){
        var phone = $("#phone").val();
        if(phone != ""){
            $("#inputPhoneDiv > span").hide();
            step++;
            loadStep3();
        }else{
            $("#inputPhoneDiv > span").show();
        }
    }

    function loadStep3(){
        hideRegisForm(personalDetailForm);
        showRegisForm(companyInfoForm);
        disabledLink(step2link);
        activeLink(step3link);
    }

    function checkStep3(){
        $("#formRegister").submit();
    }

    function verifyFrLogo(){

    }

    function  verifyEnLogo() {

    }

    function verifyCompanyName() {

    }

    function verifyAddress(){

    }

    function verifyCity() {

    }

    function verifyProvince() {

    }

    function verifyCountry() {

    }

    function verifyPostalCode() {

    }

    function getProvinces(country_id) {
        $.getJSON('http://192.168.10.10/ajax/register/provinces/'+country_id,function (data) {
            //alert(data[0].name_en);
            var slctProvince = $("#selectProvince");
            slctProvince.empty();
            $.each(data, function() {
                var option ="<option value='"+this.id+"'>"+this.name_en+"</option>"
                slctProvince.append(option);
                slctProvince.prop("disabled",false);
            });
        })
    }

    function readEnLogo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#englishLogo').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            $("#englishLogoCard > .card-body").empty();
            $("#englishLogoCard > .card-body").append("<img id=\"englishLogo\" src=\"#\" alt=\"your image\" style=\"width:100%;display: none;\" class=\"img-fluid\"/>");
            $("#englishLogoCard").css('height','auto');
            $('#englishLogo').show();
        }
    }
    function readFrLogo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#frenchLogo').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            $("#frenchLogoCard > .card-body").empty();
            $("#frenchLogoCard > .card-body").append("<img id=\"frenchLogo\" src=\"#\" alt=\"your image\" style=\"width:100%;display: none;\" class=\"img-fluid\"/>");
            $("#frenchLogoCard").css('height','auto');
            $('#frenchLogo').show();
        }
    }


    function addErrorFlash(element, msg){
        var span = "<span class='text-danger'>"+msg+"</span>";
        element.append(span);
    }

    function showRegisForm(element){
        element.show();
    }

    function hideRegisForm(element){
        element.hide();
    }

    function activeLink(element) {
        element.removeClass('disabled');
        element.addClass('active');
    }
    function disabledLink(element){
        element.removeClass('active');
        element.addClass('disabled');
    }
});
