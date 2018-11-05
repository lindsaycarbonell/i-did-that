 topicPageDropDown: function() {

        function setSelected(isDropDown, selectedLister) {
            var thisId = null; 

            if (! isDropDown) {
                thisId = $(selectedLister).attr('data-link');
            }
            else {
                thisId = $('.topic-dropdown option:selected').attr('data-link');
            }
           
            //set list
            $('.topic-list li').removeClass('selected');
            $('.topic-list li[data-link="' + thisId + '"]').addClass('selected');

            //set dropdown
            $('.topic-dropdown option[data-link="' + thisId + '"]').prop('selected', true);

            updateContent(thisId);
        }

        function updateContent(selectedId) {

            $('.services-title').addClass('hide-title');
            $('.services-title[data-link="' + selectedId + '"]').removeClass('hide-title');

            $('.services-summary').addClass('hide-title');
            $('.services-summary[data-link="' + selectedId + '"]').removeClass('hide-title');

            $('.services-cta').addClass('hide-title');
            $('.services-cta[data-link="' + selectedId + '"]').removeClass('hide-title');

        }

        $('.topic-list li').on('click', function(){ setSelected(false, this); });
        $('.topic-dropdown').on('change', function(){ setSelected(true); });
            
    }