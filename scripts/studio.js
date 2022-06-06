    const workSpace = document.getElementById("workSpace");
    const head1 = document.head.outerHTML;
    const doc = document.implementation.createHTMLDocument();
    doc.head.append(head1);
    var viewTogglerVar = 1
    var counter = 1;

    function showMenu() {
        sideBar.style.display = "flex";
    }
    sideBarWindow.onclick = function(e) {
        e.stopPropagation();
    }

    function viewToggler(view) {
        if (viewTogglerVar == 1) {
            view.style.display = 'flex'
        } else {
            view.style.display = 'none'
        }
        viewTogglerVar *= -1
    }

    function addElement(val) {
        switch (val) {
            case 0:
                var el = document.createElement("input");
                el.setAttribute("type", "text");
                el.setAttribute("placeholder", shortPlace.value);
                el.setAttribute("id", "answer_num" + counter)
                el.setAttribute("name", counter);

                if (shortLabel.value != "") {
                    var label = document.createElement("label");
                    label.setAttribute("id", "question_num" + counter);
                    label.innerHTML = counter + ". " + shortLabel.value;
                    workSpace.appendChild(label)
                }
                shortLabel.value = "";
                shortPlace.value = "";
                workSpace.appendChild(el)
                workSpace.appendChild(document.createElement("br"))
                break;
            case 1:
                var el = document.createElement("textarea");
                el.setAttribute("placeholder", longPlace.value)
                el.setAttribute("name", counter);
                el.setAttribute("id", "answer_num" + counter)

                if (longLabel.value != "") {
                    var label = document.createElement("label");
                    label.innerHTML = counter + ". " + longLabel.value;
                    label.setAttribute("id", "question_num" + counter);
                    workSpace.appendChild(label)
                    workSpace.appendChild(document.createElement("br"))
                }
                longLabel.value = "";
                longPlace.value = "";
                workSpace.appendChild(el);
                workSpace.appendChild(document.createElement("br"));
                break;
            case 2:
                var el = document.createElement("input");
                el.setAttribute("type", "number");
                el.setAttribute("placeholder", numberLabel.value);
                el.setAttribute("id", "answer_num" + counter)
                el.setAttribute("name", counter);

                if (numberLabel.value != "") {
                    var label = document.createElement("label");
                    label.innerHTML = counter + ". " + numberLabel.value;
                    label.setAttribute("id", "question_num" + counter);
                    workSpace.appendChild(label);
                }
                numberLabel.value = "";
                numberPlace.value = "";
                workSpace.appendChild(el);
                workSpace.appendChild(document.createElement("br"));
                el.setAttribute("name", counter);
                el.setAttribute("name", counter);


                break;
            case 3:
                var label = document.createElement("label");
                label.innerHTML = counter + ". " + "Email";
                label.setAttribute("id", "question_num" + counter);
                workSpace.appendChild(label)
                var el = document.createElement("input");
                el.setAttribute("type", "email");
                el.setAttribute("id", "answer_num" + counter)
                el.setAttribute("placeholder", "Enter your email");

                workSpace.appendChild(el);
                workSpace.appendChild(document.createElement("br"));
                el.setAttribute("name", counter);
                break;
            case 4:
                var label = document.createElement("label");
                label.innerHTML = counter + ". " + "Phone";
                label.setAttribute("id", "question_num" + counter);
                workSpace.appendChild(label)
                var el = document.createElement("input");
                el.setAttribute("type", "tel");
                el.setAttribute("id", "answer_num" + counter)
                el.setAttribute("placeholder", "Enter your phone");
                el.setAttribute("name", counter);

                workSpace.appendChild(el);
                workSpace.appendChild(document.createElement("br"));

                break;
            case 5:
                var label = document.createElement("label");
                label.innerHTML = counter + ". " + "Address";
                label.setAttribute("id", "question_num" + counter);
                workSpace.appendChild(label);
                var el = document.createElement("input");
                el.setAttribute("type", "text");
                el.setAttribute("id", "answer_num" + counter)
                el.setAttribute("placeholder", "Enter your address");
                el.setAttribute("name", counter);

                workSpace.appendChild(el);
                workSpace.appendChild(document.createElement("br"));
                break;
            case 6:
                var el = document.createElement("input");
                el.setAttribute("type", "date");
                el.setAttribute("name", counter);
                el.setAttribute("id", "answer_num" + counter)
                if (dateLabel.value != "") {
                    var label = document.createElement("label");
                    label.innerHTML = counter + ". " + dateLabel.value;
                    label.setAttribute("id", "question_num" + counter);
                    workSpace.appendChild(label)
                }
                dateLabel.value = "";
                workSpace.appendChild(el)
                workSpace.appendChild(document.createElement("br"))
                break;
            case 7:
                if (singleQuestion.value != "") {
                    var label = document.createElement("label");
                    label.innerHTML = counter + ". " + singleQuestion.value;
                    label.setAttribute("id", "question_num" + counter);
                    workSpace.appendChild(label);
                    workSpace.appendChild(document.createElement("br"));
                    if (singleOpt1.value != "") {
                        var label = document.createElement("label");
                        label.innerHTML = singleOpt1.value;
                        label.setAttribute("id", "choice 1" + counter);
                        workSpace.appendChild(label)
                        var el = document.createElement("input");
                        el.setAttribute("type", "radio");
                        el.setAttribute("value", "choice 1");
                        el.setAttribute("name", counter)

                        workSpace.appendChild(el);
                        workSpace.appendChild(document.createElement("br"))
                    }
                    if (singleOpt2.value != "") {
                        var label = document.createElement("label");
                        label.innerHTML = singleOpt2.value;
                        if (singleOpt3.value != "") {
                            var label = document.createElement("label");
                            label.innerHTML = singleOpt3.value;
                            label.setAttribute("id", "question_num" + counter);
                            label.setAttribute("id", "choice 2" + counter);
                            workSpace.appendChild(label)
                            var el = document.createElement("input");
                            el.setAttribute("type", "radio");
                            el.setAttribute("value", "choice 2");
                            el.setAttribute("name", counter)

                            workSpace.appendChild(el);
                            workSpace.appendChild(document.createElement("br"))
                        }
                    }
                    if (singleOpt3.value != "") {
                        var label = document.createElement("label");
                        label.innerHTML = singleOpt3.value;
                        label.setAttribute("id", "question_num" + counter);
                        label.setAttribute("id", "choice 3" + counter);
                        workSpace.appendChild(label)
                        var el = document.createElement("input");
                        el.setAttribute("type", "radio");
                        el.setAttribute("value", "choice 3");
                        el.setAttribute("name", counter)

                        workSpace.appendChild(el);
                        workSpace.appendChild(document.createElement("br"))
                    }
                    if (singleOpt4.value != "") {
                        var label = document.createElement("label");
                        label.innerHTML = singleOpt4.value;
                        label.setAttribute("id", "question_num" + counter);
                        label.setAttribute("id", "choice 4" + counter);
                        workSpace.appendChild(label)
                        var el = document.createElement("input");
                        el.setAttribute("type", "radio");
                        el.setAttribute("value", "choice 4");
                        el.setAttribute("name", counter)

                        workSpace.appendChild(el);
                        workSpace.appendChild(document.createElement("br"))
                    }
                    singleQuestion.value = counter;
                    singleOpt1.value = "";
                    singleOpt2.value = "";
                    singleOpt3.value = "";
                    singleOpt4.value = "";
                }
                break;
            case 8:
                if (multiQuestion.value != "") {
                    var label = document.createElement("label");
                    label.setAttribute("id", "question_num" + counter);
                    label.innerHTML = counter + ". " + multiQuestion.value;
                    workSpace.appendChild(label)
                    workSpace.appendChild(document.createElement("br"))
                    if (multiOpt1.value != "") {
                        var label = document.createElement("label");
                        label.innerHTML = multiOpt1.value;
                        label.setAttribute("id", "choice 1" + counter);

                        workSpace.appendChild(label)
                        var el = document.createElement("input");
                        el.setAttribute("type", "checkbox");
                        el.setAttribute("value", "choice 1");
                        el.setAttribute("name", counter);

                        workSpace.appendChild(el);
                        workSpace.appendChild(document.createElement("br"))
                    }
                    if (multiOpt2.value != "") {
                        var label = document.createElement("label");
                        label.innerHTML = multiOpt2.value;

                        label.setAttribute("id", "choice 2" + counter);
                        workSpace.appendChild(label)
                        var el = document.createElement("input");
                        el.setAttribute("type", "checkbox");
                        el.setAttribute("name", counter);
                        el.setAttribute("value", "choice 2");

                        workSpace.appendChild(el);
                        workSpace.appendChild(document.createElement("br"))
                    }
                    if (multiOpt3.value != "") {
                        var label = document.createElement("label");
                        label.innerHTML = multiOpt3.value;

                        label.setAttribute("id", "choice 3" + counter);
                        workSpace.appendChild(label)
                        var el = document.createElement("input");
                        el.setAttribute("type", "checkbox");
                        el.setAttribute("name", counter);
                        el.setAttribute("value", "choice 3");
                        workSpace.appendChild(el);
                        workSpace.appendChild(document.createElement("br"))
                    }
                    if (multiOpt4.value != "") {
                        var label = document.createElement("label");
                        label.innerHTML = multiOpt4.value;
                        label.setAttribute("id", "choice 4" + counter);
                        workSpace.appendChild(label)
                        var el = document.createElement("input");
                        el.setAttribute("type", "checkbox");
                        el.setAttribute("name", counter);

                        workSpace.appendChild(el);
                        workSpace.appendChild(document.createElement("br"))
                    }

                    multiQuestion.value = "";
                    multiOpt1.value = "";
                    multiOpt2.value = "";
                    multiOpt3.value = "";
                    multiOpt4.value = "";
                }
                break;
            case 9:
                if (dropQuestion.value != "") {
                    var label = document.createElement("label");
                    label.innerHTML = counter + ". " + dropQuestion.value;
                    label.setAttribute("id", "question_num" + counter);
                    workSpace.appendChild(label)
                    workSpace.appendChild(document.createElement("br"));
                    var selectTag = document.createElement("select");
                    el.setAttribute("name", counter);

                    if (dropOpt1.value != "") {
                        var opt = document.createElement("option");
                        opt.innerHTML = dropOpt1.value;
                        opt.setAttribute("id", "choice 1" + counter);
                        selectTag.appendChild(opt);

                    }
                    if (dropOpt2.value != "") {
                        var opt = document.createElement("option");
                        opt.innerHTML = dropOpt2.value;
                        selectTag.appendChild(opt);
                        opt.setAttribute("id", "choice 1" + counter);
                    }
                    if (dropOpt3.value != "") {
                        var opt = document.createElement("option");
                        opt.innerHTML = dropOpt3.value;
                        selectTag.appendChild(opt)
                    }
                    if (dropOpt4.value != "") {
                        var opt = document.createElement("option");
                        opt.innerHTML = dropOpt4.value;
                        opt.setAttribute("id", "choice 1" + counter);
                        selectTag.appendChild(opt);
                    }
                    workSpace.appendChild(selectTag)
                    dropQuestion.value = "";
                    dropOpt1.value = "";
                    dropOpt2.value = "";
                    dropOpt3.value = "";
                    dropOpt4.value = "";
                }
                break;
            default:
                alert("default invoked");
                break;
        }
        counter++
        sideBar.style.display = "none";
    }
    document.getElementById("publishBtn").addEventListener("click", saveFile);

    function saveFile() {
        var last = document.createElement("input");
        last.setAttribute("type", "submit");
        last.setAttribute("name", "submit");
        last.setAttribute("value", "submit");
        workSpace.appendChild(last);
        doc.body.appendChild(workSpace);
        file = new XMLSerializer().serializeToString(doc)
        replaced = file.replace(/<|&lt/gi, "@");
        replaced1 = replaced.replace(/&gt/gi, '>');
        replaced2 = replaced1.replace(/;/gi, '');
        window.location.assign("../php/file.php?created_survey=" + replaced2);
    }