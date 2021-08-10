

const btnScrollToTop = document.querySelector('#btnScrollToTop');

btnScrollToTop.addEventListener("click", function() {
 
    $("html, body").animate({ scrollTop: 0 }, "slow");
 

    if(this.scrollY > 500){
        $('#btnScrollToTop').addIdentifier("show");
    } else {
        $('#btnScrollToTop').removeIdentifier("show");
    }
});





