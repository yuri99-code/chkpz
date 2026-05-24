<?php  return array (
  'attributes' => 'Attributes',
  'attr_attr_desc' => 'One or more space-separated attributes to add to this element’s tag (for example, <span class="example-input">rel="external" type="application/pdf"</span>).',
  'attr_class_desc' => 'One or more space-separated CSS class names.',
  'attr_style_desc' => 'CSS definitions (for example, <span class="example-input">color:#f36f99; text-decoration:none;</span>).',
  'attr_target_blank' => 'Blank',
  'attr_target_parent' => 'Parent',
  'attr_target_self' => 'Self',
  'attr_target_top' => 'Top',
  'attr_target_desc' => 'Indicates in which window/tab or frame the linked url should open. To target a specific frame, enter its name in place of one of the provided options.',
  'capitalize' => 'Capitalize',
  'checkbox' => 'Check Box',
  'checkbox_column_direction' => 'Column Direction',
  'checkbox_column_direction_desc' => 'Specifies whether checkbox options are arranged vertically (top to bottom) or horizontally (left to right). (Default: “Vertical”)',
  'checkbox_column_width' => 'Column Width',
  'checkbox_column_width_desc' => 'When Wrap Column Text is set to “Yes,” this sets a predefined width for this TV’s columns. (Default: “Medium”)',
  'checkbox_columns' => 'Columns',
  'checkbox_columns_desc' => 'The number of columns the checkboxes are displayed in.',
  'checkbox_display_switch' => 'Display as Switch',
  'checkbox_display_switch_desc' => 'When set to “Yes,” this TV’s inputs will be rendered in the Resource editing form as switches (toggles) instead of checked boxes. (Default: “No”)',
  'checkbox_wrap_column_text' => 'Wrap Column Text',
  'checkbox_wrap_column_text_desc' => 'When checkbox labels contain longer text, set to “Yes“ to show text on multiple lines. (Default: “No”)',
  'class' => 'Class',
  'classes' => 'Class(es)',
  'combo_allowaddnewdata' => 'Allow Add New Items',
  'combo_allowaddnewdata_desc' => 'When Yes, allows items to be added that do not already exist in the list. Defaults to No.',
  'combo_forceselection' => 'Require Match',
  'combo_forceselection_desc' => 'Only save typed option when it matches one already defined in the list.',
  'combo_forceselection_multi_desc' => 'If this is set to Yes, only items already in the list are allowed. If No, new values can be entered a well.',
  'combo_listempty_text' => 'Option Not Found Message',
  'combo_listempty_text_desc' => 'Message to display when typed text does not match existing options.',
  'combo_listheight' => 'List Height',
  'combo_listheight_desc' => 'The height, in % or px, of the dropdown list itself. Defaults to the height of the combobox.',
  'combo_listwidth' => 'List Width',
  'combo_listwidth_desc' => 'The width, in % or px, of the dropdown list itself. Defaults to the width of the combobox.',
  'combo_maxheight' => 'Max Height',
  'combo_maxheight_desc' => 'The maximum height in pixels of the dropdown list before scrollbars are shown. (Default: 300)',
  'combo_preserve_selectionorder' => 'Preserve Entry Order',
  'combo_preserve_selectionorder_desc' => 'When set to Yes, saved items display in the order they were originally selected. Otherwise, items follow the order defined in the list options. (Default: No)',
  'combo_stackitems' => 'Stack Selected Items',
  'combo_stackitems_desc' => 'When set to Yes, the items will be stacked 1 per line. Defaults to No, which displays the items inline.',
  'combo_title' => 'List Header',
  'combo_title_desc' => 'If supplied, a header element is created containing this text and added into the top of the dropdown list.',
  'combo_typeahead' => 'Enable Type-Ahead',
  'combo_typeahead_desc' => 'Populate and autoselect options that match as you type after a configurable delay. (Default: No)',
  'combo_typeahead_delay' => 'Delay',
  'combo_typeahead_delay_desc' => 'Milliseconds before a matched option is shown. (Default: 250)',
  'date' => 'Date',
  'date_format' => 'Date Format',
  'date_format_desc' => 'Enter a format using <a href="https://www.php.net/strftime" target="_blank">php’s strftime syntax</a>.
    <div class="example-list">Common examples include:
        <ul>
            <li><span class="example-input">[[+example_1a]]</span> ([[+example_1b]]) (default format)</li>
            <li><span class="example-input">[[+example_2a]]</span> ([[+example_2b]])</li>
            <li><span class="example-input">[[+example_3a]]</span> ([[+example_3b]])</li>
            <li><span class="example-input">[[+example_4a]]</span> ([[+example_4b]])</li>
            <li><span class="example-input">[[+example_5a]]</span> ([[+example_5b]])</li>
            <li><span class="example-input">[[+example_6a]]</span> ([[+example_6b]])</li>
            <li><span class="example-input">[[+example_7a]]</span> ([[+example_7b]])</li>
        </ul>
    </div>
',
  'date_use_current' => 'Use Current Date as Fallback',
  'date_use_current_desc' => 'When a value for this TV is not required (Allow Blank = “Yes”) and a Default Date is not specified, setting this option to “Yes” will display the current date.',
  'default' => 'Default',
  'default_date_now' => 'Today with Current Time',
  'default_date_today' => 'Today (midnight)',
  'default_date_yesterday' => 'Yesterday (midnight)',
  'default_date_tomorrow' => 'Tomorrow (midnight)',
  'default_date_custom' => 'Custom (see description below)',
  'delim' => 'Delimiter',
  'delimiter' => 'Delimiter',
  'delimiter_desc' => 'One or more characters used to separate values (applicable to TVs supporting multiple chooseable options).',
  'disabled_dates' => 'Disabled Dates',
  'disabled_dates_desc' => 'A comma-separated, javascript <abbr title="regular expression">regex</abbr>-compatible list (minus delimiters) of dates in the manager’s date format (currently “[[+format_current]]”).
    <p>Examples using the default format (“[[+format_default]]”) include:</p>
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (selects individual dates)</li>
            <li><span class="example-input">[[+example_2a]]</span> (selects [[+example_2b]] and [[+example_2c]] of every year)</li>
            <li><span class="example-input">[[+example_3a]]</span> (“^” to match beginning of string; this selects all of [[+example_3b]])</li>
            <li><span class="example-input">[[+example_4a]]</span> (selects every day in [[+example_4b]])</li>
            <li><span class="example-input">[[+example_5]]</span> (“$” to match end of string; this selects every day in March of every year)</li>
        </ul>
        Note: If your date format uses dot separators they will need to be escaped (e.g., “[[+example_6a]]” should be entered above as “[[+example_6b]]”).
    </div>
',
  'disabled_days' => 'Disabled Days',
  'disabled_days_desc' => '',
  'dropdown' => 'DropDown List Menu',
  'earliest_date' => 'Earliest Date',
  'earliest_date_desc' => 'The earliest allowed date that can be selected.',
  'earliest_time' => 'Earliest Time',
  'earliest_time_desc' => 'The earliest allowed time that can be selected.',
  'email' => 'Email',
  'file' => 'File',
  'height' => 'Height',
  'hidden' => 'Hidden',
  'hide_time' => 'Hide Time Option',
  'hide_time_desc' => 'Removes the ability to choose a time from this TV’s date picker.',
  'htmlarea' => 'HTML Area',
  'htmltag' => 'HTML Tag',
  'image' => 'Image',
  'image_alt' => 'Alternate Text',
  'input_height' => 'Input Height',
  'input_height_desc' => 'A number specifying the input’s height in pixels. (Default: 140)',
  'latest_date' => 'Latest Date',
  'latest_date_desc' => 'The latest allowed date that can be selected.',
  'latest_time' => 'Latest Time',
  'latest_time_desc' => 'The latest allowed time that can be selected.',
  'listbox' => 'Listbox (Single-Select)',
  'listbox-multiple' => 'Listbox (Multi-Select)',
  'lower_case' => 'Lower Case',
  'max_length' => 'Max Length',
  'min_length' => 'Min Length',
  'regex_text' => 'Regular Expression Error',
  'regex_text_desc' => 'The message to show if the user enters text that is invalid according to the <abbr title="regular expression">regex</abbr> validator.',
  'regex' => 'Regular Expression Validator',
  'regex_desc' => 'A javascript <abbr title="regular expression">regex</abbr>-compatible string (minus delimiters) to restrict the content of this TV. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (pattern for U.S. zip codes)</li>
            <li><span class="example-input">[[+example_2]]</span> (allow only letters)</li>
            <li><span class="example-input">[[+example_3]]</span> (allow all characters except numbers)</li>
            <li><span class="example-input">[[+example_4]]</span> (must end with the string “-XP”)</li>
        </ul>
    </div>
',
  'name' => 'Name',
  'number' => 'Number',
  'number_allowdecimals' => 'Allow Decimals',
  'number_allownegative' => 'Allow Negative',
  'number_decimalprecision' => 'Precision',
  'number_decimalprecision_desc' => 'The maximum number of digits allowed after the decimal separator. (Default: 2)',
  'number_decimalprecision_strict' => 'Strict Decimal Precision',
  'number_decimalprecision_strict_desc' => 'When set to “Yes,” preserves trailing zeros in decimal numbers (defaults to “No”).',
  'number_decimalseparator' => 'Separator',
  'number_decimalseparator_desc' => 'The character used as the decimal separator. (Default: “.”)',
  'number_maxvalue' => 'Max Value',
  'number_minvalue' => 'Min Value',
  'option' => 'Radio Options',
  'parent_resources' => 'Parent Resources',
  'radio_column_direction' => 'Column Direction',
  'radio_column_direction_desc' => 'Specifies whether radio button options are arranged vertically (top to bottom) or horizontally (left to right). (Default: “Vertical”)',
  'radio_column_width' => 'Column Width',
  'radio_column_width_desc' => 'When Wrap Column Text is set to “Yes,” this sets a predefined width for this TV’s columns. (Default: “Medium”)',
  'radio_columns' => 'Columns',
  'radio_columns_desc' => 'The number of columns the radio buttons are displayed in.',
  'radio_wrap_column_text' => 'Wrap Column Text',
  'radio_wrap_column_text_desc' => 'When radio button labels contain longer text, set to “Yes“ to show text on multiple lines. (Default: “No”)',
  'rawtext' => 'Raw Text (deprecated)',
  'rawtextarea' => 'Raw Textarea (deprecated)',
  'required' => 'Allow Blank',
  'required_desc' => 'Select “No” to make this TV a required field in the Resources it’s assigned to. (Default: “Yes”)',
  'resourcelist' => 'Resource List',
  'resourcelist_depth' => 'Depth',
  'resourcelist_depth_desc' => 'The number of subfolders to drill down into for this listing’s search query. (Default: 10)',
  'resourcelist_forceselection_desc' => 'Disabled; only list matches are valid.',
  'resourcelist_includeparent' => 'Include Parents',
  'resourcelist_includeparent_desc' => 'Select “Yes” to include the Resources specified in the Parents field in the list.',
  'resourcelist_limitrelatedcontext' => 'Limit to Related Context',
  'resourcelist_limitrelatedcontext_desc' => 'Select “Yes” to only include the Resources related to the context of the current Resource.',
  'resourcelist_limit' => 'Limit',
  'resourcelist_limit_desc' => 'The maximum number of Resources shown in this TV’s listing. (Default: 0, meaning unlimited)',
  'resourcelist_listempty_text_desc' => 'Disabled; selections will always match the list.',
  'resourcelist_parents' => 'Parents',
  'resourcelist_parents_desc' => 'If specified, this TV’s listing will include only the child resources from this comma-separated set of resource IDs (containers).',
  'resourcelist_where' => 'Where Conditions',
  'resourcelist_where_desc' => '
    <p>A JSON object of one or more Resource fields to filter this TV’s listing of Resources.</p>
    <div class="example-list">Some examples:
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (only include Resources with template 4 applied)</li>
            <li><span class="example-input">[[+example_2]]</span> (include all Resources, except for those named “Home”)</li>
            <li><span class="example-input">[[+example_3]]</span> (include only Resources whose Resource Type is Weblink or Symlink)</li>
            <li><span class="example-input">[[+example_4]]</span> (include only Resources that are published and are not containers)</li>
        </ul>
    </div>
    <p>Note: Filtering by TV values is not supported.</p>
',
  'richtext' => 'RichText',
  'sentence_case' => 'Sentence Case',
  'start_day' => 'Start Day',
  'start_day_desc' => 'Day displayed as the beginning of the week in this TV’s date picker. (Default: “Sunday”)',
  'string' => 'String',
  'string_format' => 'String Format',
  'style' => 'Style',
  'tag_name' => 'Tag Name',
  'target' => 'Target',
  'text' => 'Text',
  'textarea' => 'Textarea',
  'textarea_grow' => 'Auto Grow?',
  'textarea_grow_desc' => 'Select “Yes” to allow the input’s height to automatically change based on its content. (Default: “No”)',
  'textarea_resizable' => 'Resizable?',
  'textarea_resizable_desc' => 'Select “Yes” to allow the input’s height to be changed by dragging its bottom boundary. (Default: “No”)',
  'textareamini' => 'Textarea (Mini)',
  'textbox' => 'Textbox',
  'time_increment' => 'Time Increment',
  'time_increment_desc' => 'The number of minutes between each time value in the list. (Default: 15)',
  'title' => 'Title',
  'tv_default_checkbox_desc' => 'A double-pipe-separated set of option(s) selected for this TV if the user does not check one or more. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One, or “1||3” for Option One and Option Three)',
  'tv_default_date' => 'Default Date and Time',
  'tv_default_date_desc' => 'The date to show if the user does not provide one. Choose a relative date from the list above or enter a different date using one of the following patterns:
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (number represents hours ago)</li>
            <li><span class="example-input">[[+example_2]]</span> (number represents hours in the future)</li>
            <li><span class="example-input">[[+example_3]]</span> (a specific date [and time if desired] using the format shown)</li>
        </ul>
        Note: The use of the “+” and “-” shown above is counter-intuitive, but correct (“+” represents backward in time).
    </div>',
  'tv_default_email' => 'Default Email Address',
  'tv_default_email_desc' => 'The email address this TV will show if the user does not provide one.',
  'tv_default_file' => 'Default File',
  'tv_default_file_desc' => 'The file path this TV will show if the user does not provide one.',
  'tv_default_image' => 'Default Image',
  'tv_default_image_desc' => 'The image path this TV will show if the user does not provide one.',
  'tv_default_option' => 'Default Option',
  'tv_default_option_desc' => 'The option selected for this TV if the user does not choose one. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One)',
  'tv_default_options' => 'Default Option(s)',
  'tv_default_options_desc' => 'A double-pipe-separated set of option(s) selected for this TV if the user does not choose one or more. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One, or “1||3” for Option One and Option Three)',
  'tv_default_radio_desc' => 'The option selected for this TV if the user does not choose one. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One)',
  'tv_default_listbox_desc' => 'The option selected for this TV if the user does not choose one. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One)',
  'tv_default_listbox-multiple_desc' => 'A double-pipe-separated set of option(s) selected for this TV if the user does not choose one or more. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One, or “1||3” for Option One and Option Three)',
  'tv_default_number' => 'Default Number',
  'tv_default_number_desc' => 'The number this TV will show if the user does not provide one.',
  'tv_default_resource' => 'Default Resource (ID)',
  'tv_default_resourcelist_desc' => 'The resource this TV will show if the user does not choose one.',
  'tv_default_tag' => 'Default Tag(s)',
  'tv_default_tag_desc' => 'A comma-separated set of option(s) selected for this TV if the user does not choose one or more. If your options include labels (e.g., Tag One==1||Tag Two==2||Tag Three==3), be sure to enter the value (i.e., “1” for Tag One, or “1,3” for Tag One and Tag Three)',
  'tv_default_text' => 'Default Text',
  'tv_default_text_desc' => 'The text content this TV will show if the user does not provide it.',
  'tv_default_url' => 'Default URL',
  'tv_default_url_desc' => 'The URL this TV will show if the user does not provide one.',
  'tv_elements_checkbox' => 'Checkbox Options',
  'tv_elements_listbox' => 'Dropdown List Options',
  'tv_elements_radio' => 'Radio Button Options',
  'tv_elements_tag' => 'Tag Options',
  'tv_elements_desc' => 'Defines the selectable options for this TV, which may be manually entered or built with a one-line <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables/bindings/select-binding" target="_blank">database query</a>. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Bird||Cat||Dog</span> (shorthand for Bird==Bird||Cat==Cat||Dog==Dog)</li>
            <li><span class="example-input">White==#ffffff||Black==#000000</span> (where label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (builds a list of published Resources whose assigned template id is 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (builds the same list as the previous example, including a blank option)</li>
        </ul>
    </div>
    ',
  'tv_elements_checkbox_desc' => 'Defines the selectable options for this TV, which may be manually entered or built with a one-line <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables/bindings/select-binding" target="_blank">database query</a>. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Bird||Cat||Dog</span> (shorthand for Bird==Bird||Cat==Cat||Dog==Dog)</li>
            <li><span class="example-input">White==#ffffff||Black==#000000</span> (where label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (builds a list of published Resources whose assigned template id is 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (builds the same list as the previous example, including a blank option)</li>
        </ul>
    </div>
    ',
  'tv_elements_listbox_desc' => 'Defines the selectable options for this TV, which may be manually entered or built with a one-line <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables/bindings/select-binding" target="_blank">database query</a>. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Bird||Cat||Dog</span> (shorthand for Bird==Bird||Cat==Cat||Dog==Dog)</li>
            <li><span class="example-input">White==#ffffff||Black==#000000</span> (where label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (builds a list of published Resources whose assigned template id is 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (builds the same list as the previous example, including a blank option)</li>
        </ul>
    </div>
    ',
  'tv_elements_listbox-multiple_desc' => 'Defines the selectable options for this TV, which may be manually entered or built with a one-line <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables/bindings/select-binding" target="_blank">database query</a>. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Bird||Cat||Dog</span> (shorthand for Bird==Bird||Cat==Cat||Dog==Dog)</li>
            <li><span class="example-input">White==#ffffff||Black==#000000</span> (where label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (builds a list of published Resources whose assigned template id is 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (builds the same list as the previous example, including a blank option)</li>
        </ul>
    </div>
    ',
  'tv_elements_option_desc' => 'Defines the selectable options for this TV, which may be manually entered or built with a one-line <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables/bindings/select-binding" target="_blank">database query</a>. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Bird||Cat||Dog</span> (shorthand for Bird==Bird||Cat==Cat||Dog==Dog)</li>
            <li><span class="example-input">White==#ffffff||Black==#000000</span> (where label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (builds a list of published Resources whose assigned template id is 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (builds the same list as the previous example, including a blank option)</li>
        </ul>
    </div>
    ',
  'tv_elements_radio_desc' => 'Defines the selectable options for this TV, which may be manually entered or built with a one-line <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables/bindings/select-binding" target="_blank">database query</a>. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Bird||Cat||Dog</span> (shorthand for Bird==Bird||Cat==Cat||Dog==Dog)</li>
            <li><span class="example-input">White==#ffffff||Black==#000000</span> (where label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (builds a list of published Resources whose assigned template id is 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (builds the same list as the previous example, including a blank option)</li>
        </ul>
    </div>
    ',
  'tv_elements_tag_desc' => 'Defines the selectable options for this TV, which may be manually entered or built with a one-line <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables/bindings/select-binding" target="_blank">database query</a>. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Bird||Cat||Dog</span> (shorthand for Bird==Bird||Cat==Cat||Dog==Dog)</li>
            <li><span class="example-input">White==#ffffff||Black==#000000</span> (where label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (builds a list of published Resources whose assigned template id is 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (builds the same list as the previous example, including a blank option)</li>
        </ul>
    </div>
    ',
  'upper_case' => 'Upper Case',
  'url' => 'URL',
  'url_display_text' => 'Display Text',
  'width' => 'Width',
  'tv_default_datetime' => 'Default Date and Time',
);