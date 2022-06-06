const canvas = document.getElementById("canvas");
const ul = document.getElementById("ul");

const container = document.getElementById("container2");
window.addEventListener("load", function() {
    get_pie();
});

const params = new URLSearchParams(window.location.search)
for (const param of params) {
    console.log(param)
}



function get_pie() {
    var question_num = 1;
    var choice_num = 1;
    var str = question_num.toString() + "[1]";
    var strq = question_num.toString();
    var strch1 = question_num.toString() + "[ch1]";
    var strch2 = question_num.toString() + "[ch2]";
    var strch3 = question_num.toString() + "[ch3]";
    var strch4 = question_num.toString() + "[ch4]";

    while (params.getAll(str) != "" && params.get(str) != null) {
        if (params.getAll(strq)) {
            let question = document.getElementById("question");
            question.style.marginLeft = "20em";
            question.style.padding = "10px";
            document.getElementById("question").innerHTML = params.get(strq);
            let clone1 = question.cloneNode(true);
            container.appendChild(clone1);

            if (params.getAll(strch1)) {

                let list1 = document.getElementById("list1");
                list1.style = "list-style-image:url('../images/blue.PNG')";
                list1.style.marginLeft = "25em";
                list1.style.padding = "10px";

                document.getElementById("list1").innerHTML = params.get(strch1);
                let clone2 = list1.cloneNode(true);
                container.appendChild(clone2);
            }

            if (params.getAll(strch2)) {
                let list2 = document.getElementById("list2");
                list2.style = "list-style-image:url('../images/red.PNG')";
                list2.style.marginLeft = "25em";
                list2.style.padding = "10px";
                document.getElementById("list2").innerHTML = params.get(strch2);

                let clone3 = list2.cloneNode(true);
                container.appendChild(clone3);
            }

            if (params.getAll(strch3)) {
                let list3 = document.getElementById("list3");
                list3.style = "list-style-image:url('../images/Green.PNG')";
                list3.style.marginLeft = "25em";
                list3.style.padding = "10px";
                document.getElementById("list3").innerHTML = params.get(strch3);
                let clone5 = list3.cloneNode(true);
                container.appendChild(clone5);
            }

            if (params.getAll(strch4)) {
                let list4 = document.getElementById("list4");
                list4.style = "list-style-image:url('../images/yellow.PNG')";
                list4.style.marginLeft = "25em";
                list4.style.padding = "10px";
                document.getElementById("list4").innerHTML = params.get(strch4);
                let clone7 = list4.cloneNode(true);
                container.appendChild(clone7);
            }

            let canvass = document.createElement("canvas");
            canvass.setAttribute("width", "300px");
            canvass.setAttribute("height", "350px");
            canvass.setAttribute("class", "canvas_class")
            canvass.setAttribute("id", question_num);
            canvass.style.marginLeft = "25em";
            canvass.style.padding = "10px";
            canvass.style.display = "inline";
            let ctx = canvass.getContext("2d");
            const results = [{
                mood: "choice1",
                total: parseFloat(params.getAll(str)),
                shade: "#00008B"
            }, {
                mood: "choice2",
                total: parseFloat(params.getAll(question_num.toString() + "[2]")),
                shade: "#e5ff00"
            }, {
                mood: "choice3",
                total: parseFloat(params.getAll(question_num.toString() + "[3]")),
                shade: "#006400"
            }, {
                mood: "choice4",
                total: parseFloat(params.getAll(question_num.toString() + "[4]")),
                shade: "#ff0000"
            }];

            let sum = 0;
            let totalNumberOfPeople = results.reduce((sum, {
                total
            }) => sum + total, 0);
            let currentAngle = 0;

            for (let moodValue of results) {
                //calculating the angle the slice (portion) will take in the chart
                let portionAngle = (moodValue.total / totalNumberOfPeople) * 2 * Math.PI;
                //drawing an arc and a line to the center to differentiate the slice from the rest
                ctx.beginPath();
                ctx.arc(100, 100, 100, currentAngle, currentAngle + portionAngle);
                currentAngle += portionAngle;
                ctx.lineTo(100, 100);
                //filling the slices with the corresponding mood's color
                ctx.fillStyle = moodValue.shade;
                ctx.fill();
            }
            container.appendChild(canvass);
        } else {

        }

        question_num = question_num + 1;
        str = question_num.toString() + "[1]";
        strq = question_num.toString();
        var strch1 = question_num.toString() + "[ch1]";
        var strch2 = question_num.toString() + "[ch2]";
        var strch3 = question_num.toString() + "[ch3]";
        var strch4 = question_num.toString() + "[ch4]";

    }
}