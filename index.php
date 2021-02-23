<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="blockfaq">
    <div class="faq">
        <p>FAQ</p>
    </div>

    <div class="ask">
        <p>Sed ut percepeciatis unde omnis iste natus error sit voluptatem <br/>
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
    </div>

    <ul>
        <li>
            <button class="collapsible">Can i upgrade later on?</button>
            <div class="content">
                <p>Yes you can.</p>
            </div>
        </li>
        <li>
            <button class="collapsible">Can i port my data from another provider?</button>
            <div class="content">
                <p>Yes you can.</p>
            </div>
        </li>
        <li>
            <button class="collapsible">Are my food photos stored forever in the cloud</button>
            <div class="content">
                <p>Lmao no it's not possible you dumb.</p>
            </div>
        </li>
        <li>
            <button class="collapsible">Who foots the bill for that?</button>
            <div class="content">
                <p>Yo mama aahahah.</p>
            </div>
        </li>
        <li>
            <button class="collapsible">What's the real cost?</button>
            <div class="content">
                <p>21 you stupid.</p>
            </div>
        </li>
        <li>
            <button class="collapsible">Can my company request a custom plan?</button>
            <div class="content">
                <p>My man that's why you are here for.</p>
            </div>
        </li>
    </ul>

    <div class="ques"
    <p>Still have unanswered questions? <span style="color:rgba(209,1,113,255)">Get in touch</span></p>
</div>


<div class="footer">
    <div class="vale">
    </div>
    <div class="infooter">
        <p>©2019 Page protected by reCAPTCHA and subject to Google's <span style="color: white; font-weight: bold"> Privacy policy </span>
            and
            <span style="color: white; font-weight: bold"> Term of Services </span></p>
        <img src="links.jpg">
    </div>
</div>
</div>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>

</body>
</html>
