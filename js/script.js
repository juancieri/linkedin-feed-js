/* BACK TO TOP */
$(document).ready(function(){
      $('body').append('<div id="toTop" class="to-top-btn"><i class="fa fa-angle-up"></i></div>');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

/* LINKEDIN FEED */
function onLinkedInLoad() {
    IN.Event.on(IN, "auth", onLinkedInAuth);
    console.log("On auth");
}

function onLinkedInAuth() {
    var cpnyID = 2414183; //the Company ID for which we want updates

    IN.API.Raw("/companies/" + cpnyID + "/updates?event-type=status-update&start=0&count=1&format=json").result(displayCompanyUpdates);

    console.log("After auth");

}

function displayCompanyUpdates(result) {

    var div = document.getElementById("displayUpdates");

    var el = "<div class='linkedin-feed-content'>";

    var resValues = result.values;

    for (var i in resValues) {

        var share = resValues[i].updateContent.companyStatusUpdate.share;

        var isContent = share.content;

        var isTitled = isContent,

            isLinked = isContent,

            isDescription = isContent,

            isThumbnail = isContent,

            isComment = isContent;

        if (isTitled) {

            var title = isContent.title;

        } else {

            var title = "News headline";

        }

        var comment = share.comment;

        if (isLinked) {

            var link = isContent.shortenedUrl;

        } else {

            var link = "#";

        }

        if (isDescription) {

            var description = isContent.description;

        } else {

            var description = "No description";

        }

        if (share) {
            
            var content = "<h4 class='linkedin-feed-post-title'><a href='" + link + "'>" + title + "</a></h4><figure><a href='" + link + "'><img src='' alt='' class='img-responsive'></a></figure><figcaption><p>" + description + "</p></figcaption>";

            el += "<div class='linkedin-feed-post'>" + content + "</div>";

        }

        console.log(share);

    }

    el += "</div>";

    document.getElementById("displayUpdates").innerHTML = el;

}
