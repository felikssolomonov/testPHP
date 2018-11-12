function onClick(element) {
    idd = element.id;
    document.location.href="index.php?selected=" + idd;
    return element.id;
}

function onClickNews(element) {
    idd = element.id;
    document.location.href="index.php?news=" + idd;
    return element.id;
}