var $collectionHolder;

// setup an "add a tag" link
var $addTagLink = $('<button style="margin-top: 10px;" class="btn btn-success btn-sm btn-block" type="button" href="#" class="add_tag_link">Añadir Almacen</button>');
var $newLinkLi = $('<div></div>').append($addTagLink);

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    $collectionHolder = $('div.tags');

    /*Para en el editar quitar un almacen*/
    $collectionHolder.children().append(
        '<a href="#" class="remove-tag btn btn-danger btn-sm btn-block">Quitar Almacen</a>');

    $collectionHolder.children().click(function(e) {
        e.preventDefault();
        $(this).children().remove();
        return false;
    });
    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder.append($newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addTagLink.on('click', function(e) {
        $cantHijos = $collectionHolder.children().length;
        // prevent the link from creating a "#" on the URL
        e.preventDefault();
        // add a new tag form (see next code block)
        if($cantHijos < 3){ addTagForm($collectionHolder, $newLinkLi); }
    });
});
function addTagForm($collectionHolder, $newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<div></div>').append(newForm);
    //$newLinkLi.before($newFormLi);

    // also add a remove button, just for this example
    $newFormLi.append('<a href="#" class="remove-tag btn btn-danger btn-sm btn-block">Quitar Almacen</a>');
    
    $newLinkLi.before($newFormLi);
    
    // handle the removal, just for this example
    $('.remove-tag').click(function(e) {
        e.preventDefault();
        
        $(this).parent().remove();
        
        return false;
    });
}