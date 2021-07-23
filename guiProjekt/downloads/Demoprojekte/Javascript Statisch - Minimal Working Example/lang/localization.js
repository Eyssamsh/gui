function GetLocalizedContent(language, langref) {
	return lang[language][langref];
}

function UpdateLocalization(language) {
    $('*[langref]').each(function(i, v) {
        $(v).html(
            GetLocalizedContent(language, $(v).attr("langref"))
        );
    });
}

UpdateLocalization("enus");
