<link rel="stylesheet" type="text/css"
        href="http://wpgraphicator.andrasweb.com/wp-content/plugins/wpgraphicator/assets/libs/css/iris.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://wpgraphicator.andrasweb.com/wp-content/plugins/wpgraphicator/assets/libs/css/fontawesome-solid.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://wpgraphicator.andrasweb.com/wp-content/plugins/wpgraphicator/assets/admin/css/editor-styles.build.min.css">
    <style type="text/css">
        body {
            margin: 0;
            background: #313131;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            font-size: 13px;
            line-height: 1.4em;
        }

        h3 {
            font-size: 1.3em;
            font-weight: 600;
        }

        .js .hide-if-js,
        .no-js .hide-if-no-js {
            display: none;
        }

        .wpg-topbar__loader {
            display: none !important;
        }
    </style>
    <script type="text/javascript" src="http://wpgraphicator.andrasweb.com/wp-includes/js/jquery/jquery.min.js">
    </script>
    <script src='http://wpgraphicator.andrasweb.com/wp-includes/js/jquery/ui/core.min.js'></script>
    <script src='http://wpgraphicator.andrasweb.com/wp-includes/js/jquery/ui/mouse.min.js'></script>
    <script src='http://wpgraphicator.andrasweb.com/wp-includes/js/jquery/ui/draggable.min.js'></script>
    <script src='http://wpgraphicator.andrasweb.com/wp-includes/js/jquery/ui/slider.min.js'></script>
    <script src='http://wpgraphicator.andrasweb.com/wp-includes/js/jquery/jquery.ui.touch-punch.js'></script>
    <script type="text/javascript"
        src="http://wpgraphicator.andrasweb.com/wp-content/plugins/wpgraphicator/assets/libs/js/iris.min.js"></script>
    <script type="text/javascript" src="http://wpgraphicator.andrasweb.com/wp-includes/js/underscore.min.js"></script>
    <script type="text/javascript" src="http://wpgraphicator.andrasweb.com/wp-includes/js/backbone.min.js"></script>
    <script type="text/javascript" src='http://wpgraphicator.andrasweb.com/wp-includes/js/wp-util.min.js'></script>
  
    <script src="http://wpgraphicator.andrasweb.com/wp-includes/js/dist/hooks.min.js"></script>


    <script type="text/javascript"
        src="http://wpgraphicator.andrasweb.com/wp-content/plugins/wpgraphicator/assets/libs/js/fabric.min.js"></script>

    <script type="text/javascript" src="http://wpgraphicator.andrasweb.com/wp-includes/js/dist/i18n.min.js"></script>
    <script type="text/javascript"
        src="http://wpgraphicator.andrasweb.com/wp-content/plugins/wpgraphicator/assets/libs/js/jquery.waypoints.min.js">
    </script>
    <script type="text/javascript"
        src="http://wpgraphicator.andrasweb.com/wp-content/plugins/wpgraphicator/assets/frontend/js/wpgraphicator.build.min.js">
    </script>
    <script type="text/javascript">
        var wpgEditor = {
            "project_id": "0",
            "url": {
                "new_project": "http://wpgraphicator.andrasweb.com/demo-editor/",
                "projects": "#"
            },
            "playing_modes": {
                "onscreen": {
                    "label": "On Screen",
                    "description": "Play animation always when svg is on the viewport."
                },
                "onscreenonce": {
                    "label": "On Screen Once",
                    "description": "Play animation only once when svg is first time on the viewport."
                },
                "hover": {
                    "label": "Hover",
                    "description": "Play animation on mouse hover."
                },
                "hoveronce": {
                    "label": "Hover Once",
                    "description": "Play animation on mouse hover only once."
                },
                "hoverinout": {
                    "label": "Hover In Out",
                    "description": "Play animation on mouse hover, and play reverse on hover out."
                },
                "click": {
                    "label": "On Click",
                    "description": "Play animation when you click on the svg."
                }
            },
            "preserve_aspect_ratio_values": ["none", "xMinYMin meet", "xMinYMin slice", "xMidYMin meet",
                "xMidYMin slice", "xMaxYMin meet", "xMaxYMin slice", "xMinYMid meet", "xMinYMid slice",
                "xMidYMid meet", "xMidYMid slice", "xMaxYMid meet", "xMaxYMid slice", "xMinYMax meet",
                "xMinYMax slice", "xMidYMax meet", "xMidYMax slice", "xMaxYMax meet", "xMaxYMax slice"
            ],
            "version": "1.1.0"
        };
    </script>
</head>

<body class="no-js">
    <script type="text/javascript">
        jQuery('body').removeClass('no-js').addClass('js');
    </script>
    <div id="wpg-editor" class="wpg-editor">
        <div id="wpg-frame__topbar" class="wpg-topbar">
            <div class="wpg-subview__topbar-menu"></div>
            <div class="wpg-subview__topbar-save"></div>
            <div class="wpg-subview__notification">
                <div class="wpg-notification wpg-notification-warning hide-if-js"> <span
                        class="wpg-notification-message"> The editor requires JavaScript. Please enable JavaScript in
                        your browser settings. </span> </div>
            </div>
            <div class="wpg-topbar__loader"></div>
        </div>
        <div class="wpg-workarea hide-if-no-js">
            <div class="wpg-workarea__inner">
                <div id="wpg-frame__toolbar" class="wpg-toolbar">
                    <div class="wpg-subview__toolbar-buttons"></div>
                </div>
                <div id="wpg-frame__project" class="wpg-project"> <canvas id="wpg-canvas__scene"></canvas> </div>
                <div id="wpg-frame__settings" class="wpg-settings">
                    <div id="wpg-tab__project" class="wpg-tab">
                        <h3 class="wpg-tab__title"> <span>Project</span> <button class="wpg-button"
                                aria-expanded="false" aria-label="Toggle Panel: Projects"> <i class="fas fa-angle-down"
                                    aria-hidden="true"></i> </button> </h3>
                        <div class="wpg-subview__settings-project wpg-tab__content"></div>
                    </div>
                    <div id="wpg-tab__stats" class="wpg-tab">
                        <h3 class="wpg-tab__title"> <span>Information</span> <button class="wpg-button"
                                aria-expanded="false" aria-label="Toggle Panel: Information"> <i
                                    class="fas fa-angle-down" aria-hidden="true"></i> </button> </h3>
                        <div class="wpg-subview__settings-stats wpg-tab__content"></div>
                    </div>
                    <div id="wpg-tab__layers" class="wpg-tab">
                        <h3 class="wpg-tab__title"> <span>Layers</span> <button class="wpg-button" aria-expanded="true"
                                aria-label="Toggle Panel: Layers"> <i class="fas fa-angle-up" aria-hidden="true"></i>
                            </button> </h3>
                        <div class="wpg-subview__settings-layer wpg-tab__content"></div>
                    </div>
                    <div class="wpg-subview__settings-shape"></div>
                </div>
            </div>
        </div>
        <div id="wpg-frame__timeline" class="wpg-timeline hide-if-no-js">
            <div class="wpg-timeline__current-time-wrapper"> <span class="wpg-timeline__current-time" tabindex="0">
                    <span class="wpg-timeline__current-time-arrow"></span> </span> </div>
            <div class="wpg-timeline-top">
                <div class="wpg-timeline-topbar"> <time class="wpg-timeline-topbar-timer"></time> <button title="Play"
                        aria-label="Play" class="wpg-timeline-topbar-play-button wpg-button"> <i class="fas fa-play"
                            aria-hidden="true"></i> </button> </div>
                <div class="wpg-subview__timeline-timeslider"></div>
            </div>
            <div class="wpg-subview__timeline-shape"></div>
        </div>
        <div class="wpg-editor__preloader hide-if-no-js">
            <div class="wpg-editor__preloader-inner">
                <h3>Loading...</h3>
                <p>This might take a while.</p>
                <div class="wpg-editor__preloader-animation"> <span
                        class="wpg-editor__preloader-animation-point-1"></span> <span
                        class="wpg-editor__preloader-animation-point-2"></span> <span
                        class="wpg-editor__preloader-animation-point-3"></span> <span
                        class="wpg-editor__preloader-animation-point-4"></span> </div>
            </div>
        </div>
    </div>
    <script type="text/html" id="tmpl-wpg-subview__topbar-menu">
        <a href="http://wpgraphicator.andrasweb.com" class="wpg-button" title="Back to Website"
            aria-label="Back to Website"> <i class="fas fa-angle-left" aria-hidden="true"></i> </a>
        <# var activeItem=data.state.topbarMenuActiveDropdown; var activeModal=data.state.topbarMenuShowModal; var
            shortcodeParams=data.state.shortcodeParams; #>
            <ul class="wpg-topbar-menu__items">
                <# for (var i=0; i < data.menuItems.length; i++){ var menuItem=data.menuItems[i]; #>
                    <li class="wpg-topbar-menu__item"> <button class="wpg-topbar-menu__item-button wpg-button"
                            data-item="{{menuItem.name}}"> {{menuItem.title}} </button>
                        <# if (activeItem===menuItem.name){ #>
                            <ul class="wpg-topbar-menu__dropdown-items wpg-popup">
                                <# for (var j=0; j < menuItem.items.length; j++){ var dropdownItem=menuItem.items[j]; if
                                    (dropdownItem.name==='divider' ){ #>
                                    <hr class="wpg-divider" />
                                    <# continue; } #>
                                        <li class="wpg-topbar-menu__dropdown-item"> <button
                                                class="wpg-topbar-menu__dropdown-item-button wpg-button"
                                                data-action="{{dropdownItem.name}}"
                                                {{_.result(dropdownItem, 'disabled') ? 'disabled="true"' : ''}}>
                                                {{dropdownItem.title}} </button> </li>
                                        <# } #>
                            </ul>
                            <# } #>
                    </li>
                    <# } #>
            </ul>
            <# if (activeItem !=='' || activeModal !=='' ){ #>
                <div class="wpg-popup__backdrop"></div>
                <# } if (activeModal){ var className=(activeModal==='keyboard-shortcuts' ||
                    activeModal==='shortcode-generator' || activeModal==='import-svg' ) ? ' wpg-topbar-menu__modal-lg'
                    : '' ; #>
                    <div class="wpg-topbar-menu__modal{{className}} wpg-popup">
                        <# switch (activeModal){ case 'save-as' : #>
                            <div class="wpg-input-wrapper"> <label for="wpg_label_save_as" class="wpg-label"> Name
                                </label> <input type="text" id="wpg_label_save_as"
                                    class="wpg-topbar-menu__modal-save-as-input wpg-input" placeholder="Untitled">
                            </div>
                            <div class="wpg-input-wrapper"> <button
                                    class="wpg-topbar-menu__modal-save-as-button wpg-button active"> Save </button>
                            </div>
                            <# break; case 'import-svg' : #>
                                <div class="wpg-topbar-menu__modal-svg-import">
                                    <div class="wpg-input-wrapper"> <button
                                            class="wpg-topbar-menu__modal-svg-import-file-button wpg-button"> Choose
                                            File </button> <span
                                            class="wpg-topbar-menu__modal-svg-import-file-name"></span> <span
                                            class="wpg-topbar-menu__modal-svg-import-num-of-layers"></span> </div>
                                    <div class="wpg-topbar-menu__modal-svg-import-preview wpg-input-wrapper">
                                        <div class="wpg-topbar-menu__modal-svg-import-loader">
                                            <div class="wpg-editor__preloader-animation"> <span
                                                    class="wpg-editor__preloader-animation-point-1"></span> <span
                                                    class="wpg-editor__preloader-animation-point-2"></span> <span
                                                    class="wpg-editor__preloader-animation-point-3"></span> <span
                                                    class="wpg-editor__preloader-animation-point-4"></span> </div>
                                        </div>
                                    </div>
                                    <div class="wpg-topbar-menu__modal-svg-import-message"></div>
                                    <div class="wpg-topbar-menu__modal-svg-import-button-wrapper">
                                        <div class="wpg-input-wrapper"> <input type="checkbox"
                                                class="wpg-topbar-menu__modal-svg-import-reset-canvas wpg-checkbox"
                                                id="wpg_label_reset_canvas"> <label for="wpg_label_reset_canvas"
                                                class="wpg-label"> Clear, and Resize Canvas </label> </div>
                                        <div class="wpg-input-wrapper"> <button
                                                class="wpg-topbar-menu__modal-svg-import-ok-button wpg-button"> Import
                                            </button> <button
                                                class="wpg-topbar-menu__modal-svg-import-cancel-button wpg-button">
                                                Cancel </button> </div>
                                    </div>
                                </div>
                                <# break; case 'grid-size' : #>
                                    <div class="wpg-input-wrapper"> <label for="wpg_label_grid_size"
                                            class="wpg-label">Grid Size</label> <input type="number"
                                            id="wpg_label_grid_size"
                                            class="wpg-topbar-menu__modal-grid-size-input wpg-input"
                                            value="{{data.state.gridSize}}" min="1" max="20" step="1"> </div>
                                    <# break; case 'default-easing' : #>
                                        <div class="wpg-input-wrapper"> <label for="wpg_label_default_easing"
                                                class="wpg-label"> Default Easing </label> <select
                                                id="wpg_label_default_easing"
                                                class="wpg-topbar-menu__modal-default-easing-select wpg-select">
                                                <# for (var easing in data.easings){ #>
                                                    <option value="{{easing}}"
                                                        {{easing === data.state.defaultEasing ? 'selected="true"' : ''}}>
                                                        {{data.easings[easing]}} </option>
                                                    <# } #>
                                            </select> </div>
                                        <# break; case 'keyboard-shortcuts' : #>
                                            <div class="wpg-keyboard-shortcuts">
                                                <h3 class="wpg-popup__title">Keyboard Shortcuts</h3>
                                                <# for (var i=0; i < data.keyboardShortcuts.length; i++){ var
                                                    section=data.keyboardShortcuts[i]; #>
                                                    <div class="wpg-keyboard-shortcuts__section">
                                                        <h4 class="wpg-label">{{section.title}}</h4>
                                                        <ul class="wpg-keyboard-shortcuts__list">
                                                            <# for (var j=0; j < section.shortcuts.length; j++){ var
                                                                shortcut=section.shortcuts[j]; #>
                                                                <li class="wpg-keyboard-shortcuts__list-item"> <span
                                                                        class="wpg-keyboard-shortcuts__description">
                                                                        {{shortcut.description}} </span> <kbd
                                                                        class="wpg-keyboard-shortcuts__combination">
                                                                        {{shortcut.combination}} </kbd> </li>
                                                                <# } #>
                                                        </ul>
                                                    </div>
                                                    <# } #>
                                            </div>
                                            <# break; case 'shortcode-generator' : #>
                                                <div class="wpg-shortcode-generator">
                                                    <h3 class="wpg-popup__title">Shortcode Generator</h3>
                                                    <# if (data.state.projectID){ #>
                                                        <div
                                                            class="wpg-shortcode-generator__shortcode wpg-input-wrapper">
                                                            <input type="text"
                                                                class="wpg-shortcode-generator__shortcode-input wpg-input"
                                                                value="{{data.getShortcode()}}" readonly="true"> <button
                                                                title="Copy Shortcode to Clipboard"
                                                                aria-label="Copy Shortcode to Clipboard"
                                                                class="wpg-shortcode-generator__copy-button wpg-button">
                                                                <i class="fas fa-copy" aria-hidden="true"></i> </button>
                                                        </div>
                                                        <div
                                                            class="wpg-shortcode-generator__svg-preview wpg-input-wrapper">
                                                            {{{data.getSvgPreview()}}} </div>
                                                        <div class="wpg-shortcode-generator__settings">
                                                            <div class="wpg-input-wrapper"> <label
                                                                    for="wpg_label_repeat"
                                                                    class="wpg-label">Repeat</label> <select
                                                                    id="wpg_label_repeat" class="wpg-select"
                                                                    data-param="repeat">
                                                                    <option value=""
                                                                        {{!shortcodeParams.repeat ? 'selected="true"' : ''}}>
                                                                        Select an Option</option>
                                                                    <# for (var i=1; i <=10; i++){ #>
                                                                        <option value="{{i}}"
                                                                            {{shortcodeParams.repeat == i ? 'selected="true"' : ''}}>
                                                                            {{i}}</option>
                                                                        <# } #>
                                                                            <option value="infinity"
                                                                                {{shortcodeParams.repeat === 'infinity' ? 'selected="true"' : ''}}>
                                                                                Infinity</option>
                                                                </select> </div>
                                                            <div class="wpg-input-wrapper"> <label for="wpg_label_play"
                                                                    class="wpg-label">Playing Mode</label> <select
                                                                    id="wpg_label_play" class="wpg-select"
                                                                    data-param="play">
                                                                    <option value=""
                                                                        {{!shortcodeParams.play ? 'selected="true"' : ''}}>
                                                                        Select an Option</option>
                                                                    <# for (var mode in data.playingModes){ #>
                                                                        <option value="{{mode}}"
                                                                            {{shortcodeParams.play === mode ? 'selected="true"' : ''}}>
                                                                            {{data.playingModes[mode].label}} </option>
                                                                        <# } #>
                                                                </select> </div>
                                                            <div class="wpg-input-wrapper"> <label
                                                                    for="wpg_label_direction"
                                                                    class="wpg-label">Direction</label> <select
                                                                    id="wpg_label_direction" class="wpg-select"
                                                                    data-param="direction">
                                                                    <option value=""
                                                                        {{!shortcodeParams.direction ? 'selected="true"' : ''}}>
                                                                        Select an Option</option>
                                                                    <option value="normal"
                                                                        {{shortcodeParams.direction === 'normal' ? 'selected="true"' : ''}}>
                                                                        Normal</option>
                                                                    <option value="reverse"
                                                                        {{shortcodeParams.direction === 'reverse' ? 'selected="true"' : ''}}>
                                                                        Reverse</option>
                                                                    <option value="alternate"
                                                                        {{shortcodeParams.direction === 'alternate' ? 'selected="true"' : ''}}>
                                                                        Alternate</option>
                                                                </select> </div>
                                                            <div class="wpg-input-wrapper"> <label
                                                                    for="wpg_label_offset"
                                                                    class="wpg-label">Offset</label> <input
                                                                    type="number" id="wpg_label_offset"
                                                                    class="wpg-input" data-param="offset"
                                                                    value="{{shortcodeParams.offset || ''}}" min="0"
                                                                    max="100" step="1"> </div>
                                                            <div class="wpg-input-wrapper"> <label
                                                                    for="wpg_label_svg_width"
                                                                    class="wpg-label">Width</label> <input type="number"
                                                                    id="wpg_label_svg_width" class="wpg-input"
                                                                    data-param="width"
                                                                    value="{{shortcodeParams.width || ''}}" min="1"
                                                                    step="1"> </div>
                                                            <div class="wpg-input-wrapper"> <label
                                                                    for="wpg_label_svg_height"
                                                                    class="wpg-label">Height</label> <input
                                                                    type="number" id="wpg_label_svg_height"
                                                                    class="wpg-input" data-param="height"
                                                                    value="{{shortcodeParams.height || ''}}" min="1"
                                                                    step="1"> </div>
                                                            <div class="wpg-input-wrapper"> <label
                                                                    for="wpg_label_preserve_aspect_ratio"
                                                                    class="wpg-label">Preserve Aspect Ratio</label>
                                                                <select id="wpg_label_preserve_aspect_ratio"
                                                                    class="wpg-select" data-param="preserveaspectratio">
                                                                    <option value=""
                                                                        {{!shortcodeParams.preserveaspectratio ? 'selected="true"' : ''}}>
                                                                        Select an Option </option>
                                                                    <# var par=data.preserveAspectRatioValues; for (var
                                                                        i=0; i < par.length; i++){ #>
                                                                        <option value="{{par[i]}}"
                                                                            {{shortcodeParams.preserveaspectratio === par[i] ? 'selected="true"' : ''}}>
                                                                            {{par[i]}} </option>
                                                                        <# } #>
                                                                </select> </div>
                                                            <div class="wpg-input-wrapper"> <label
                                                                    for="wpg_label_class_names" class="wpg-label">Class
                                                                    Names</label> <input type="text"
                                                                    id="wpg_label_class_names" class="wpg-input"
                                                                    value="{{shortcodeParams.class || ''}}"
                                                                    data-param="class"> </div>
                                                            <div class="wpg-input-wrapper"> <label for="wpg_label_href"
                                                                    class="wpg-label">Link</label> <input type="url"
                                                                    id="wpg_label_href" class="wpg-input"
                                                                    value="{{shortcodeParams.href || ''}}"
                                                                    data-param="href"> </div>
                                                        </div>
                                                        <# } else { #>
                                                            <p> Please Save Your Project as a First Step! </p>
                                                            <# } #>
                                                </div>
                                                <# break; default: break; } #>
                    </div>
                    <# } #>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__topbar-save">
        <a href="https://codecanyon.net/item/wpgraphicator-svg-animation-maker-for-wordpress/31873754"
            class="wpg-button active"> Get WordPress plugin for only $25 on CodeCanyon </a> <button
            title="Toggle Settings" aria-label="Toggle Settings" class="wpg-topbar-open-settings-button wpg-button"> <i
                class="fas fa-cog" aria-hidden="true"></i> </button>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__notification">
        <span class="wpg-notification-message"> {{data.model.message}} </span>
        <# if (data.model.confirm){ #> <button class="wpg-button wpg-notification-confirm-button">Ok</button>
            <# } if (data.model.dismiss){ #> <button class="wpg-button wpg-notification-dismiss-button">Cancel</button>
                <# } #>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__toolbar-buttons">
        <# var buttons=data.buttons; var shapes=data.shapeLibrary; for (var i=0; i < buttons.length; i++){ var
            btn=buttons[i]; var activeTool=data.state.activeTool; var strokeColor=data.state.activeStrokeColor; var
            fillColor=data.state.activeFillColor; #>
            <li class="wpg-toolbar-button wpg-toolbar-button__{{btn.name}}"> <button title="{{btn.title}}"
                    aria-label="{{btn.title}}" class="wpg-button {{activeTool === btn.name ? 'active' : ''}}"
                    data-name="{{btn.name}}" {{data.getDisabled(btn)}}> <i class="{{btn.icon}}" aria-hidden="true"></i>
                </button>
                <# if (data.needsColorPopup(btn)){ #>
                    <div class="wpg-popup">
                        <h3 class="wpg-popup__title">{{btn.title}}</h3> <input type="text"
                            class="wpg-color-picker wpg-input"
                            value="{{btn.name === 'stroke-color' ? strokeColor : fillColor}}">
                    </div>
                    <div class="wpg-popup__backdrop"></div>
                    <# } else if (data.needsSliderPopup(btn)){ #>
                        <div class="wpg-popup">
                            <h3 class="wpg-popup__title">{{btn.title}}</h3>
                            <div class="wpg-range-slider"></div>
                        </div>
                        <div class="wpg-popup__backdrop"></div>
                        <# } else if (data.needsShapesPopup(btn)){ #>
                            <div class="wpg-popup">
                                <h3 class="wpg-popup__title">{{btn.title}}</h3>
                                <ul class="wpg-toolbar-button__shape-library">
                                    <# for (var j=0; j < shapes.length; j++){ var shape=shapes[j]; #>
                                        <li class="wpg-toolbar-button__shape-library-item"> <button class="wpg-button"
                                                title="{{shape.label}}" data-type="{{shape.type}}"
                                                data-path="{{shape.path}}" data-viewbox="{{shape.viewBox}}"
                                                aria-label="{{shape.label}}"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="50" height="50" viewBox="{{shape.viewBox || '0 0 100 100'}}"
                                                    role="img" aria-hidden="true">
                                                    <# switch (shape.type){ case 'path' : #>
                                                        <path d="{{shape.path}}" stroke="currentColor" stroke-width="4%"
                                                            fill="none" />
                                                        <# break; case 'polygon' : #>
                                                            <polygon points="{{shape.path}}" stroke="currentColor"
                                                                stroke-width="4%" fill="none" />
                                                            <# break; case 'polyline' : #>
                                                                <polyline points="{{shape.path}}" stroke="currentColor"
                                                                    stroke-width="4%" fill="none" />
                                                                <# break; default: break; } #>
                                                </svg> </button> </li>
                                        <# } #>
                                </ul>
                            </div>
                            <div class="wpg-popup__backdrop"></div>
                            <# } #>
            </li>
            <# } #>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__settings-project">
        <div class="wpg-settings-project__name">
            <div class="wpg-input-wrapper"> <label for="wpg_label_project_name" class="wpg-label">Name</label> <input
                    type="text" id="wpg_label_project_name" data-state="projectName" class="wpg-input"
                    value="{{data.state.projectName}}"> </div>
        </div>
        <# if (data.state.projectID){ #>
            <div class="wpg-settings-project__copy-shortcode">
                <div class="wpg-input-wrapper"> <label for="wpg_label_project_shortcode"
                        class="wpg-label">Shortcode</label>
                    <div class="wpg-settings-project__copy-shortcode-wrapper"> <input type="text"
                            id="wpg_label_project_shortcode"
                            class="wpg-settings-project__copy-shortcode-input wpg-input"
                            value="[wpgraphicator id={{data.state.projectID}}]" readonly="true"> <button
                            title="Copy Shortcode to Clipboard" aria-label="Copy Shortcode to Clipboard"
                            class="wpg-settings-project__copy-shortcode-button wpg-button"> <i class="fas fa-copy"
                                aria-hidden="true"></i> </button> <button title="Open Shortcode Generator"
                            aria-label="Open Shortcode Generator"
                            class="wpg-settings-project__open-shortcode-generator wpg-button"> <i class="fas fa-cog"
                                aria-hidden="true"></i> </button> </div>
                </div>
            </div>
            <# } #>
                <div class="wpg-settings-project__size">
                    <div class="wpg-input-wrapper"> <label for="wpg_label_project_width" class="wpg-label">Width</label>
                        <input type="number" id="wpg_label_project_width" data-state="projectWidth" class="wpg-input"
                            value="{{data.state.projectWidth}}"> </div>
                    <div class="wpg-input-wrapper"> <label for="wpg_label_project_height"
                            class="wpg-label">Height</label> <input type="number" id="wpg_label_project_height"
                            data-state="projectHeight" class="wpg-input" value="{{data.state.projectHeight}}"> </div>
                </div>
                <div class="wpg-settings-project__duration">
                    <div class="wpg-input-wrapper"> <label for="wpg_label_project_seconds" class="wpg-label">Max
                            Duration</label> <input type="number" id="wpg_label_project_seconds" data-state="seconds"
                            class="wpg-input" min="1" max="300" step="1" value="{{data.state.seconds}}"> </div>
                </div>
                <div class="wpg-settings-project__bg-color">
                    <div class="wpg-input-wrapper"> <label for="wpg_label_project_bg" class="wpg-label">Background
                            Color</label> <input type="text" id="wpg_label_project_bg"
                            class="wpg-color-picker wpg-input" value="{{data.state.projectBackground}}"> </div>
                </div>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__settings-stats">
        <h4 class="wpg-label">Number of Layers</h4>
        <p>{{data.layersCount}}</p>
        <h4 class="wpg-label">Total Duration</h4>
        <p>{{data.getTotalDuration()}}</p>
        <h4 class="wpg-label">Pointer Position</h4>
        <p>Left: {{data.state.pointerPosition.x}}</p>
        <p>Top: {{data.state.pointerPosition.y}}</p>
        <# if (data.hasActiveShape){ #>
            <h4 class="wpg-label">Pointer Local Position</h4>
            <p>Left: {{(data.localPosition.x || 0).toFixed(2)}}</p>
            <p>Top: {{(data.localPosition.y || 0).toFixed(2)}}</p>
            <# if (data.strokeLength){ #>
                <h4 class="wpg-label">Stroke Length</h4>
                <p>{{data.strokeLength}}</p>
                <# } #>
                    <# } #>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__settings-layer">
        <button title="Select This Layer" aria-label="Select This Layer"
            class="wpg-settings-layer__grip-button wpg-button"> <i class="fas fa-grip-vertical" aria-hidden="true"></i>
        </button> <button title="Move Layer up" aria-label="Move Layer up"
            class="wpg-settings-layer__move-button wpg-button" data-direction="up"> <i class="fas fa-angle-up"
                aria-hidden="true"></i> </button> <button title="Move Layer Down" aria-label="Move Layer Down"
            class="wpg-settings-layer__move-button wpg-button" data-direction="down"> <i class="fas fa-angle-down"
                aria-hidden="true"></i> </button> <button title="Copy Layer" aria-label="Copy Layer"
            class="wpg-settings-layer__copy-button wpg-button"> <i class="fas fa-copy" aria-hidden="true"></i> </button>
        <div class="wpg-settings-layer__title wpg-input-wrapper"> <input type="text" class="wpg-input"
                value="{{data.model.name || data.shapeName}}" title="Change Layer Name" aria-label="Change Layer Name">
        </div> <button title="Remove Layer" aria-label="Remove Layer" class="wpg-remove-item-button wpg-button"> <i
                class="fas fa-times" aria-hidden="true"></i> </button>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__settings-shape">
        <# var shape=data.getSelectedShape(); var expandedTabs=data.state.activeSettingsTabs || []; if
            (!_.isEmpty(shape)){ #>
            <div id="wpg-tab__transform" class="wpg-settings-shape__transform wpg-tab">
                <h3 class="wpg-tab__title"> <span>Transform</span> <button class="wpg-button"
                        aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__transform')}}"
                        aria-label="Toggle Panel: Transform"> <i
                            class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__transform') ? 'up' : 'down'}}"
                            aria-hidden="true"></i> </button> </h3>
                <div class="wpg-tab__content">
                    <div class="wpg-settings-shape__transform-translate">
                        <div class="wpg-input-wrapper"> <label for="wpg_label_left" class="wpg-label">Left</label>
                            <input type="number" id="wpg_label_left" data-property="left"
                                class="wpg-settings-shape__transform-input wpg-input"
                                value="{{(shape.left || 0).toFixed(2)}}"> <button
                                class="wpg-settings-shape__add-to-stream-button wpg-button" data-property="left"
                                title="Add to Timeline" aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                            </button> </div>
                        <div class="wpg-input-wrapper"> <label for="wpg_label_top" class="wpg-label">Top</label> <input
                                type="number" id="wpg_label_top" data-property="top"
                                class="wpg-settings-shape__transform-input wpg-input"
                                value="{{(shape.top || 0).toFixed(2)}}"> <button
                                class="wpg-settings-shape__add-to-stream-button wpg-button" data-property="top"
                                title="Add to Timeline" aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                            </button> </div>
                    </div>
                    <div class="wpg-settings-shape__transform-scale">
                        <div class="wpg-input-wrapper"> <label for="wpg_label_scale_x" class="wpg-label">Scale X</label>
                            <input type="number" id="wpg_label_scale_x" data-property="scaleX"
                                class="wpg-settings-shape__transform-input wpg-input"
                                value="{{(shape.scaleX || 0).toFixed(2)}}"> <button
                                class="wpg-settings-shape__add-to-stream-button wpg-button" data-property="scaleX"
                                title="Add to Timeline" aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                            </button> </div>
                        <div class="wpg-input-wrapper"> <label for="wpg_label_scale_y" class="wpg-label">Scale Y</label>
                            <input type="number" id="wpg_label_scale_y" data-property="scaleY"
                                class="wpg-settings-shape__transform-input wpg-input"
                                value="{{(shape.scaleY || 0).toFixed(2)}}"> <button
                                class="wpg-settings-shape__add-to-stream-button wpg-button" data-property="scaleY"
                                title="Add to Timeline" aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                            </button> </div>
                    </div>
                    <div class="wpg-settings-shape__transform-skew">
                        <div class="wpg-input-wrapper"> <label for="wpg_label_skew_x" class="wpg-label">Skew X</label>
                            <input type="number" id="wpg_label_skew_x" data-property="skewX"
                                class="wpg-settings-shape__transform-input wpg-input"
                                value="{{(shape.skewX || 0).toFixed(2)}}"> <button
                                class="wpg-settings-shape__add-to-stream-button wpg-button" data-property="skewX"
                                title="Add to Timeline" aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                            </button> </div>
                        <div class="wpg-input-wrapper"> <label for="wpg_label_skew_y" class="wpg-label">Skew Y</label>
                            <input type="number" id="wpg_label_skew_y" data-property="skewY"
                                class="wpg-settings-shape__transform-input wpg-input"
                                value="{{(shape.skewY || 0).toFixed(2)}}"> <button
                                class="wpg-settings-shape__add-to-stream-button wpg-button" data-property="skewY"
                                title="Add to Timeline" aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                            </button> </div>
                    </div>
                    <div class="wpg-settings-shape__transform-rotate">
                        <div class="wpg-input-wrapper"> <label for="wpg_label_angle" class="wpg-label">Angle</label>
                            <input type="number" id="wpg_label_angle" data-property="angle"
                                class="wpg-settings-shape__transform-input wpg-input"
                                value="{{(shape.angle || 0).toFixed(2)}}"> <button
                                class="wpg-settings-shape__add-to-stream-button wpg-button" data-property="angle"
                                title="Add to Timeline" aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                            </button> </div>
                    </div>
                </div>
            </div>
            <# if (shape.type !=='image' && shape.type !=='group' ){ #>
                <div id="wpg-tab__stroke" class="wpg-tab">
                    <h3 class="wpg-tab__title"> <span>Stroke</span> <button class="wpg-button"
                            aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__stroke')}}"
                            aria-label="Toggle Panel: Stroke"> <i
                                class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__stroke') ? 'up' : 'down'}}"
                                aria-hidden="true"></i> </button> </h3>
                    <div class="wpg-tab__content">
                        <div class="wpg-settings-shape__stroke-width">
                            <div class="wpg-input-wrapper"> <span class="wpg-label">Stroke Width</span>
                                <div class="wpg-settings-shape__stroke-width-input wpg-range-slider"></div> <button
                                    class="wpg-settings-shape__add-to-stream-button wpg-button"
                                    data-property="strokeWidth" title="Add to Timeline" aria-label="Add to Timeline"> <i
                                        class="fas fa-plus"></i> </button>
                            </div>
                        </div>
                        <div class="wpg-input-wrapper"> <label for="wpg_label_stroke_type" class="wpg-label">Stroke
                                Type</label> <select id="wpg_label_stroke_type"
                                class="wpg-settings-shape__stroke-type-select wpg-select">
                                <option value="color" {{_.isString(shape.stroke) ? 'selected="true"' : ''}}> Color
                                </option>
                                <option value="linear"
                                    {{_.isObject(shape.stroke) && shape.stroke.type === 'linear' ? 'selected="true"' : ''}}>
                                    Linear Gradient </option>
                                <option value="radial"
                                    {{_.isObject(shape.stroke) && shape.stroke.type === 'radial' ? 'selected="true"' : ''}}>
                                    Radial Gradient </option>
                            </select> </div>
                        <div class="wpg-settings-shape__stroke-color">
                            <div class="wpg-input-wrapper"> <label for="wpg_label_stroke_color" class="wpg-label">Stroke
                                    Color</label>
                                <# if (_.isObject(shape.stroke)){ #> <input type="text" id="wpg_label_stroke_color"
                                        class="wpg-settings-shape__stroke-gradient-input wpg-input"
                                        value="{{shape.stroke.colorStops[0].color}}">
                                    <# } else { #> <input type="text" id="wpg_label_stroke_color"
                                            class="wpg-settings-shape__stroke-color-input wpg-input"
                                            value="{{shape.stroke}}">
                                        <# } #> <button class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                data-property="stroke" title="Add to Timeline"
                                                aria-label="Add to Timeline"> <i class="fas fa-plus"></i> </button>
                            </div>
                        </div>
                        <div class="wpg-settings-shape__stroke-dash">
                            <div class="wpg-input-wrapper"> <span class="wpg-label">Stroke Dash Array</span>
                                <div class="wpg-settings-shape__stroke-dash-array-input wpg-stroke-dash-array-control">
                                </div> <button class="wpg-settings-shape__add-to-stream-button wpg-button"
                                    data-property="strokeDashArray" title="Add to Timeline"
                                    aria-label="Add to Timeline"> <i class="fas fa-plus"></i> </button>
                            </div>
                            <div class="wpg-input-wrapper"> <label for="wpg_label_stroke_dash_offset"
                                    class="wpg-label">Stroke Dash Offset</label> <input type="number"
                                    id="wpg_label_stroke_dash_offset" data-property="strokeDashOffset"
                                    class="wpg-settings-shape__stroke-dash-offset-input wpg-input"
                                    value="{{shape.strokeDashOffset}}"> <button
                                    class="wpg-settings-shape__add-to-stream-button wpg-button"
                                    data-property="strokeDashOffset" title="Add to Timeline"
                                    aria-label="Add to Timeline"> <i class="fas fa-plus"></i> </button> </div>
                        </div>
                        <div class="wpg-settings-shape__stroke-others">
                            <div class="wpg-input-wrapper"> <label for="wpg_label_stroke_linecap"
                                    class="wpg-label">Stroke Line Cap</label> <select id="wpg_label_stroke_linecap"
                                    class="wpg-settings-shape__stroke-others-select wpg-select"
                                    data-property="strokeLineCap">
                                    <option value="butt" {{shape.strokeLineCap === 'butt' ? 'selected="true"' : ''}}>
                                        Butt</option>
                                    <option value="round" {{shape.strokeLineCap === 'round' ? 'selected="true"' : ''}}>
                                        Round</option>
                                    <option value="square"
                                        {{shape.strokeLineCap === 'square' ? 'selected="true"' : ''}}>Square</option>
                                </select> </div>
                            <div class="wpg-input-wrapper"> <label for="wpg_label_stroke_linejoin"
                                    class="wpg-label">Stroke Line Join</label> <select id="wpg_label_stroke_linejoin"
                                    class="wpg-settings-shape__stroke-others-select wpg-select"
                                    data-property="strokeLineJoin">
                                    <option value="bevel" {{shape.strokeLineJoin === 'bevel' ? 'selected="true"' : ''}}>
                                        Bevel</option>
                                    <option value="miter" {{shape.strokeLineJoin === 'miter' ? 'selected="true"' : ''}}>
                                        Miter</option>
                                    <option value="round" {{shape.strokeLineJoin === 'round' ? 'selected="true"' : ''}}>
                                        Round</option>
                                </select> </div>
                            <div class="wpg-input-wrapper"> <label for="wpg_label_vector_effect"
                                    class="wpg-label">Vector Effect</label> <select id="wpg_label_vector_effect"
                                    class="wpg-settings-shape__stroke-others-select wpg-select"
                                    data-property="strokeUniform">
                                    <option value="false" {{shape.strokeUniform === false ? 'selected="true"' : ''}}>
                                        None</option>
                                    <option value="true" {{shape.strokeUniform === true ? 'selected="true"' : ''}}>Non
                                        Scaling Stroke</option>
                                </select> </div>
                        </div>
                    </div>
                </div>
                <# } if (shape.type !=='line' && shape.type !=='image' && shape.type !=='group' ){ #>
                    <div id="wpg-tab__fill" class="wpg-tab">
                        <h3 class="wpg-tab__title"> <span>Fill</span> <button class="wpg-button"
                                aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__fill')}}"
                                aria-label="Toggle Panel: Fill"> <i
                                    class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__fill') ? 'up' : 'down'}}"
                                    aria-hidden="true"></i> </button> </h3>
                        <div class="wpg-tab__content">
                            <div class="wpg-settings-shape__fill-color">
                                <div class="wpg-input-wrapper"> <label for="wpg_label_fill_type" class="wpg-label">Fill
                                        Type</label> <select id="wpg_label_fill_type"
                                        class="wpg-settings-shape__fill-type-select wpg-select">
                                        <option value="color" {{_.isString(shape.fill) ? 'selected="true"' : ''}}> Color
                                        </option>
                                        <option value="linear"
                                            {{_.isObject(shape.fill) && shape.fill.type === 'linear' ? 'selected="true"' : ''}}>
                                            Linear Gradient </option>
                                        <option value="radial"
                                            {{_.isObject(shape.fill) && shape.fill.type === 'radial' ? 'selected="true"' : ''}}>
                                            Radial Gradient </option>
                                    </select> </div>
                                <div class="wpg-input-wrapper"> <label for="wpg_label_fill_color" class="wpg-label">Fill
                                        Color</label>
                                    <# if (_.isObject(shape.fill)){ #> <input type="text" id="wpg_label_fill_color"
                                            class="wpg-settings-shape__fill-gradient-input wpg-input"
                                            value="{{shape.fill.colorStops[0].color}}">
                                        <# } else { #> <input type="text" id="wpg_label_fill_color"
                                                class="wpg-settings-shape__fill-color-input wpg-input"
                                                value="{{shape.fill}}">
                                            <# } #> <button class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                    data-property="fill" title="Add to Timeline"
                                                    aria-label="Add to Timeline"> <i class="fas fa-plus"></i> </button>
                                </div>
                            </div>
                            <div class="wpg-settings-shape__fill-rule">
                                <div class="wpg-input-wrapper"> <label for="wpg_label_fill_rule" class="wpg-label"> Fill
                                        Rule </label> <select id="wpg_label_fill_rule"
                                        class="wpg-settings-shape__fill-rule-select wpg-select"
                                        data-property="fillRule">
                                        <option value="nozero" {{shape.fillRule === 'nozero' ? 'selected="true"' : ''}}>
                                            nozero </option>
                                        <option value="evenodd"
                                            {{shape.fillRule === 'evenodd' ? 'selected="true"' : ''}}> evenodd </option>
                                    </select> </div>
                            </div>
                        </div>
                    </div>
                    <# } #>
                        <div id="wpg-tab__opacity" class="wpg-tab">
                            <h3 class="wpg-tab__title"> <span>Opacity</span> <button class="wpg-button"
                                    aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__opacity')}}"
                                    aria-label="Toggle Panel: Opacity"> <i
                                        class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__opacity') ? 'up' : 'down'}}"
                                        aria-hidden="true"></i> </button> </h3>
                            <div class="wpg-tab__content">
                                <div class="wpg-input-wrapper"> <span class="wpg-label">Opacity</span>
                                    <div class="wpg-settings-shape__opacity-input wpg-range-slider"></div> <button
                                        class="wpg-settings-shape__add-to-stream-button wpg-button"
                                        data-property="opacity" title="Add to Timeline" aria-label="Add to Timeline"> <i
                                            class="fas fa-plus"></i> </button>
                                </div>
                            </div>
                        </div>
                        <# switch (shape.type){ case 'rect' : case 'ellipse' : #>
                            <div id="wpg-tab__dimensions" class="wpg-tab">
                                <h3 class="wpg-tab__title"> <span>Dimensions</span> <button class="wpg-button"
                                        aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__dimensions')}}"
                                        aria-label="Toggle Panel: Dimensions"> <i
                                            class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__dimensions') ? 'up' : 'down'}}"
                                            aria-hidden="true"></i> </button> </h3>
                                <div class="wpg-tab__content">
                                    <div class="wpg-settings-shape__dimensions">
                                        <div class="wpg-input-wrapper"> <label for="wpg_label_width"
                                                class="wpg-label">Width</label> <input type="number"
                                                id="wpg_label_width" data-property="width"
                                                class="wpg-settings-shape__dimensions-input wpg-input"
                                                value="{{(shape.width || 0).toFixed(2)}}"> <button
                                                class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                data-property="width" title="Add to Timeline"
                                                aria-label="Add to Timeline"> <i class="fas fa-plus"></i> </button>
                                        </div>
                                        <div class="wpg-input-wrapper"> <label for="wpg_label_height"
                                                class="wpg-label">Height</label> <input type="number"
                                                id="wpg_label_height" data-property="height"
                                                class="wpg-settings-shape__dimensions-input wpg-input"
                                                value="{{(shape.height || 0).toFixed(2)}}"> <button
                                                class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                data-property="height" title="Add to Timeline"
                                                aria-label="Add to Timeline"> <i class="fas fa-plus"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <# break; case 'circle' : #>
                                <div id="wpg-tab__dimensions" class="wpg-tab">
                                    <h3 class="wpg-tab__title"> <span>Dimensions</span> <button class="wpg-button"
                                            aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__dimensions')}}"
                                            aria-label="Toggle Panel: Dimensions"> <i
                                                class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__dimensions') ? 'up' : 'down'}}"
                                                aria-hidden="true"></i> </button> </h3>
                                    <div class="wpg-tab__content">
                                        <div class="wpg-settings-shape__dimensions">
                                            <div class="wpg-input-wrapper"> <label for="wpg_label_radius"
                                                    class="wpg-label">Radius</label> <input type="number"
                                                    id="wpg_label_radius" data-property="radius"
                                                    class="wpg-settings-shape__dimensions-input wpg-input"
                                                    value="{{(shape.radius || 0).toFixed(2)}}"> <button
                                                    class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                    data-property="radius" title="Add to Timeline"
                                                    aria-label="Add to Timeline"> <i class="fas fa-plus"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <# break; case 'line' : #>
                                    <div id="wpg-tab__dimensions" class="wpg-tab">
                                        <h3 class="wpg-tab__title"> <span>Dimensions</span> <button class="wpg-button"
                                                aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__dimensions')}}"
                                                aria-label="Toggle Panel: Dimensions"> <i
                                                    class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__dimensions') ? 'up' : 'down'}}"
                                                    aria-hidden="true"></i> </button> </h3>
                                        <div class="wpg-tab__content">
                                            <div class="wpg-settings-shape__dimensions">
                                                <div class="wpg-input-wrapper"> <label for="wpg_label_x1"
                                                        class="wpg-label">X 1</label> <input type="number"
                                                        id="wpg_label_x1" data-property="x1"
                                                        class="wpg-settings-shape__dimensions-input wpg-input"
                                                        value="{{(shape.x1 || 0).toFixed(2)}}"> <button
                                                        class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                        data-property="x1" title="Add to Timeline"
                                                        aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                                                    </button> </div>
                                                <div class="wpg-input-wrapper"> <label for="wpg_label_y1"
                                                        class="wpg-label">Y 1</label> <input type="number"
                                                        id="wpg_label_y1" data-property="y1"
                                                        class="wpg-settings-shape__dimensions-input wpg-input"
                                                        value="{{(shape.y1 || 0).toFixed(2)}}"> <button
                                                        class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                        data-property="y1" title="Add to Timeline"
                                                        aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                                                    </button> </div>
                                                <div class="wpg-input-wrapper"> <label for="wpg_label_x2"
                                                        class="wpg-label">X 2</label> <input type="number"
                                                        id="wpg_label_x2" data-property="x2"
                                                        class="wpg-settings-shape__dimensions-input wpg-input"
                                                        value="{{(shape.x2 || 0).toFixed(2)}}"> <button
                                                        class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                        data-property="x2" title="Add to Timeline"
                                                        aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                                                    </button> </div>
                                                <div class="wpg-input-wrapper"> <label for="wpg_label_y2"
                                                        class="wpg-label">Y 2</label> <input type="number"
                                                        id="wpg_label_y2" data-property="y2"
                                                        class="wpg-settings-shape__dimensions-input wpg-input"
                                                        value="{{(shape.y2 || 0).toFixed(2)}}"> <button
                                                        class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                        data-property="y2" title="Add to Timeline"
                                                        aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                                                    </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <# break; case 'i-text' : #>
                                        <div id="wpg-tab__font" class="wpg-tab">
                                            <h3 class="wpg-tab__title"> <span>Font</span> <button class="wpg-button"
                                                    aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__font')}}"
                                                    aria-label="Toggle Panel: Font"> <i
                                                        class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__font') ? 'up' : 'down'}}"
                                                        aria-hidden="true"></i> </button> </h3>
                                            <div class="wpg-tab__content">
                                                <div class="wpg-settings-shape__font">
                                                    <div class="wpg-input-wrapper"> <span class="wpg-label">Font
                                                            Size</span>
                                                        <div
                                                            class="wpg-settings-shape__font-size-input wpg-range-slider">
                                                        </div> <button
                                                            class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                            data-property="fontSize" title="Add to Timeline"
                                                            aria-label="Add to Timeline"> <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="wpg-input-wrapper"> <label for="wpg_label_font_family"
                                                            class="wpg-label">Font Family</label> <select
                                                            id="wpg_label_font_family" data-property="fontFamily"
                                                            class="wpg-settings-shape__font-select wpg-select">
                                                            <# for (var i=0; i < data.webSafeFonts.length; i++){ #>
                                                                <option value="{{data.webSafeFonts[i]}}"
                                                                    {{data.webSafeFonts[i] === shape.fontFamily ? 'selected="true"' : ''}}>
                                                                    {{data.webSafeFonts[i]}} </option>
                                                                <# } #>
                                                        </select> </div>
                                                    <div class="wpg-input-wrapper"> <label for="wpg_label_text_align"
                                                            class="wpg-label">Text Align</label> <select
                                                            id="wpg_label_text_align" data-property="textAlign"
                                                            class="wpg-settings-shape__font-select wpg-select">
                                                            <option value="left"
                                                                {{shape.textAlign === 'left' ? 'selected="true"' : ''}}>
                                                                Left</option>
                                                            <option value="center"
                                                                {{shape.textAlign === 'center' ? 'selected="true"' : ''}}>
                                                                Center</option>
                                                            <option value="right"
                                                                {{shape.textAlign === 'right' ? 'selected="true"' : ''}}>
                                                                Right</option>
                                                        </select> </div>
                                                    <div class="wpg-input-wrapper"> <label for="wpg_label_font_style"
                                                            class="wpg-label">Font Style</label> <select
                                                            id="wpg_label_font_style" data-property="fontStyle"
                                                            class="wpg-settings-shape__font-select wpg-select">
                                                            <option value="normal"
                                                                {{shape.fontStyle === 'normal' ? 'selected="true"' : ''}}>
                                                                Normal</option>
                                                            <option value="italic"
                                                                {{shape.fontStyle === 'italic' ? 'selected="true"' : ''}}>
                                                                Italic</option>
                                                        </select> </div>
                                                    <div class="wpg-input-wrapper"> <label for="wpg_label_font_weight"
                                                            class="wpg-label">Font Weight</label> <select
                                                            id="wpg_label_font_weight" data-property="fontWeight"
                                                            class="wpg-settings-shape__font-select wpg-select">
                                                            <option value="normal"
                                                                {{shape.fontWeight === 'normal' ? 'selected="true"' : ''}}>
                                                                Normal</option>
                                                            <option value="bold"
                                                                {{shape.fontWeight === 'bold' ? 'selected="true"' : ''}}>
                                                                Bold</option>
                                                        </select> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <# break; case 'path' : #>
                                            <div id="wpg-tab__path" class="wpg-tab">
                                                <h3 class="wpg-tab__title"> <span>Path</span> <button class="wpg-button"
                                                        aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__path')}}"
                                                        aria-label="Toggle Panel: Path"> <i
                                                            class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__path') ? 'up' : 'down'}}"
                                                            aria-hidden="true"></i> </button> </h3>
                                                <div class="wpg-tab__content">
                                                    <div class="wpg-settings-shape__path">
                                                        <div class="wpg-input-wrapper"> <span
                                                                class="wpg-label">Path</span>
                                                            <div class="wpg-settings-shape__path-input-wrapper">
                                                                <# var path=shape.path || []; for (var i=0; i <
                                                                    path.length; i++){ var c=path[i]; #>
                                                                    <div class="wpg-settings-shape__path-command">
                                                                        <# for (var j=0; j < c.length; j++){ if (j===0){
                                                                            #> <span>{{c[j]}}</span>
                                                                            <# } else { #> <input type="number"
                                                                                    class="wpg-settings-shape__path-input wpg-input"
                                                                                    value="{{c[j]}}">
                                                                                <# } } #>
                                                                    </div>
                                                                    <# } #>
                                                            </div> <button
                                                                class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                                data-property="path" title="Add to Timeline"
                                                                aria-label="Add to Timeline"> <i
                                                                    class="fas fa-plus"></i> </button>
                                                        </div>
                                                        <div class="wpg-input-wrapper"> <button
                                                                class="wpg-settings-shape__path-update-bb-button wpg-button">
                                                                Update Bounding Box </button> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <# break; case 'polyline' : case 'polygon' : #>
                                                <div id="wpg-tab__path" class="wpg-tab">
                                                    <h3 class="wpg-tab__title"> <span>Points</span> <button
                                                            class="wpg-button"
                                                            aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__path')}}"
                                                            aria-label="Toggle Panel: Points"> <i
                                                                class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__path') ? 'up' : 'down'}}"
                                                                aria-hidden="true"></i> </button> </h3>
                                                    <div class="wpg-tab__content">
                                                        <div class="wpg-settings-shape__polyline">
                                                            <div class="wpg-input-wrapper"> <span
                                                                    class="wpg-label">Points</span>
                                                                <div class="wpg-settings-shape__polyline-input-wrapper">
                                                                    <# var points=shape.points || []; for (var i=0; i <
                                                                        points.length; i++){ #>
                                                                        <div class="wpg-settings-shape__polyline-point">
                                                                            <input type="number"
                                                                                class="wpg-settings-shape__polyline-input wpg-input"
                                                                                value="{{points[i].x}}"> <input
                                                                                type="number"
                                                                                class="wpg-settings-shape__polyline-input wpg-input"
                                                                                value="{{points[i].y}}"> </div>
                                                                        <# } #>
                                                                </div> <button
                                                                    class="wpg-settings-shape__add-to-stream-button wpg-button"
                                                                    data-property="points" title="Add to Timeline"
                                                                    aria-label="Add to Timeline"> <i
                                                                        class="fas fa-plus"></i> </button>
                                                            </div>
                                                            <div class="wpg-input-wrapper"> <button
                                                                    class="wpg-settings-shape__path-update-bb-button wpg-button">
                                                                    Update Bounding Box </button> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <# break; case 'image' : #>
                                                    <div id="wpg-tab__image" class="wpg-tab">
                                                        <h3 class="wpg-tab__title"> <span>Image</span> <button
                                                                class="wpg-button"
                                                                aria-expanded="{{_.contains(expandedTabs, 'wpg-tab__image')}}"
                                                                aria-label="Toggle Panel: Points"> <i
                                                                    class="fas fa-angle-{{_.contains(expandedTabs, 'wpg-tab__image') ? 'up' : 'down'}}"
                                                                    aria-hidden="true"></i> </button> </h3>
                                                        <div class="wpg-tab__content">
                                                            <div class="wpg-settings-shape__image">
                                                                <div class="wpg-input-wrapper"> <label
                                                                        for="wpg_label_image_size"
                                                                        class="wpg-label">Image Size</label> <select
                                                                        id="wpg_label_image_size"
                                                                        class="wpg-settings-shape__image-size-select wpg-select">
                                                                        <option value="thumbnail"
                                                                            {{shape.wpSize === 'thumbnail' ? 'selected="true"' : ''}}>
                                                                            Thumbnail</option>
                                                                        <option value="medium"
                                                                            {{shape.wpSize === 'medium' ? 'selected="true"' : ''}}>
                                                                            Medium</option>
                                                                        <option value="large"
                                                                            {{shape.wpSize === 'large' ? 'selected="true"' : ''}}>
                                                                            Large</option>
                                                                        <option value="full"
                                                                            {{shape.wpSize === 'full' ? 'selected="true"' : ''}}>
                                                                            Full Size</option>
                                                                    </select> </div>
                                                                <div class="wpg-input-wrapper"> <button
                                                                        class="wpg-settings-shape__image-replace wpg-button">
                                                                        Replace Image </button> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <# break; default: break; } #>
                                                        <# } #>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__timeline-timeslider">
        <# var seconds=data.state.seconds; var width=data.state.secondWidth; var deciseconds=(width> 80) ? 10 : 2; #>
            <span class="wpg-timeline-timeslider-cursor"></span>
            <!-- <span class="wpg-timeline-timeslider-current-time"> <span class="wpg-timeline-timeslider-current-time-arrow"></span> </span> -->
            <div class="wpg-timeline-timeslider-seconds">
                <# for (var i=0; i < seconds; i++){ #>
                    <div class="wpg-timeline-timeslider-second" style="width: {{width}}px;"> <span>{{i}}</span>
                        <# if (width> 40){ #> <div class="wpg-timeline-timeslider-deciseconds">
                                <# for (var j=1; j <=deciseconds; j++){ #> <span></span>
                                    <# } #>
                            </div>
                            <# } #>
                    </div>
                    <# } #>
            </div>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__timeline-shape">
        <# var seconds=data.state.seconds; var secondWidth=data.state.secondWidth; var
            timelineLeft=data.state.timelineLeft; var start=data.model.start; var duration=data.model.duration; #>
            <div class="wpg-timeline-shape__left-sidebar">
                <div class="wpg-timeline-shape__title"> <button title="Select This Layer" aria-label="Select This Layer"
                        class="wpg-timeline-shape__grip-button wpg-button"> <i class="fas fa-grip-vertical"
                            aria-hidden="true"></i> </button>
                    <div class="wpg-input-wrapper"> <input type="text" title="Change Layer Name"
                            aria-label="Change Layer Name" class="wpg-timeline-shape__change-name-input wpg-input"
                            value="{{data.model.name || data.shapeName}}"> </div> <button title="Remove Layer"
                        aria-label="Remove Layer" class="wpg-remove-item-button wpg-button"> <i class="fas fa-times"
                            aria-hidden="true"></i> </button>
                </div>
                <div class="wpg-subview__timeline-sidebar-track"></div>
            </div>
            <div class="wpg-timeline-shape__tracks">
                <div class="wpg-timeline-shape__tracks-inner"
                    style="width: {{seconds * secondWidth}}px;left: {{timelineLeft}}px;">
                    <div class="wpg-timeline-shape__process-bar wpg-timeline-shape__title"> <span
                            class="wpg-timeline-shape__process-bar-strip"
                            style="width: {{duration * secondWidth}}px;left: {{start * secondWidth}}px;"
                            tabindex="0"></span> </div>
                    <div class="wpg-subview__timeline-track"></div>
                </div>
            </div>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__timeline-sidebar-track">
        <div class="wpg-timeline-sidebar-track__title"> {{data.propertyName}} </div> <button
            title="Remove Property From Timeline" aria-label="Remove Property From Timeline"
            class="wpg-button wpg-remove-property-button"> <i class="fas fa-times" aria-hidden="true"></i> </button>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__timeline-track">
        <div class="wpg-subview__timeline-track-point"></div>
    </script>
    <script type="text/html" id="tmpl-wpg-subview__timeline-track-point">
        <span class="wpg-timeline-track-point-diamond" title="{{data.title}}" aria-label="{{data.title}}"
            tabindex="0"></span>
        <# if (data.state.trackPointViewShowPopup===data.cid){ #>
            <div class="wpg-popup">
                <h3 class="wpg-popup__title"> {{data.propertyName}} </h3>
                <div class="wpg-input-wrapper"> <label for="wpg_label_track_point_second" class="wpg-label"> Second
                    </label> <input type="number" id="wpg_label_track_point_second"
                        class="wpg-timeline-track-point-second wpg-input" value="{{data.model.second}}" min="0"
                        max="{{data.state.seconds}}" step="0.01"> </div>
                <div class="wpg-input-wrapper"> <label for="wpg_label_track_point_value" class="wpg-label"> Value
                    </label>
                    <# switch (data.model.property){ case 'strokeDashArray' : #>
                        <div class="wpg-stroke-dash-array-control"></div>
                        <# break; case 'strokeWidth' : case 'fontSize' : #>
                            <div class="wpg-range-slider"></div>
                            <# break; case 'stroke' : case 'fill' : var gradient=(data.model.value || ''
                                ).indexOf('GRADIENT')===0; #> <input type="text" id="wpg_label_track_point_value"
                                    class="wpg-{{gradient ? 'gradient' : 'color'}}-picker wpg-input"
                                    value="{{data.model.value}}">
                                <# break; case 'path' : #>
                                    <div class="wpg-timeline-track-point__path-input-wrapper">
                                        <# var path=data.parsePath(data.model.value); for (var i=0; i < path.length;
                                            i++){ var c=path[i]; #>
                                            <div class="wpg-timeline-track-point__path-command">
                                                <# for (var j=0; j < c.length; j++){ if (j===0){ #>
                                                    <span>{{c[j]}}</span>
                                                    <# } else { #> <input type="number"
                                                            class="wpg-timeline-track-point__path-input wpg-input"
                                                            value="{{c[j]}}">
                                                        <# } } #>
                                            </div>
                                            <# } #>
                                    </div>
                                    <# break; case 'points' : #>
                                        <div class="wpg-timeline-track-point__polyline-input-wrapper">
                                            <# var points=data.parsePoints(data.model.value); for (var i=0; i <
                                                points.length; i++){ #>
                                                <div class="wpg-timeline-track-point__polyline-point"> <input
                                                        type="number"
                                                        class="wpg-timeline-track-point__polyline-input wpg-input"
                                                        value="{{points[i].x}}"> <input type="number"
                                                        class="wpg-timeline-track-point__polyline-input wpg-input"
                                                        value="{{points[i].y}}"> </div>
                                                <# } #>
                                        </div>
                                        <# break; default: #> <input type="number" id="wpg_label_track_point_value"
                                                class="wpg-timeline-track-point-value wpg-input"
                                                value="{{data.model.value}}">
                                            <# break; } #>
                </div>
                <div class="wpg-input-wrapper"> <label for="wpg_label_track_point_easing" class="wpg-label"> Easing
                    </label> <select id="wpg_label_track_point_easing"
                        class="wpg-timeline-track-point-easing wpg-select">
                        <# for (var easing in data.easings){ #>
                            <option value="{{easing}}" {{easing === data.model.easing ? 'selected="true"' : ''}}>
                                {{data.easings[easing]}} </option>
                            <# } #>
                    </select> </div>
                <div class="wpg-input-wrapper"> <button class="wpg-timeline-track-point-remove wpg-button"> Remove This
                        Keyframe </button> </div>
            </div>
            <div class="wpg-popup__backdrop"></div>
            <# } #>
    </script>
    <script type="text/javascript" src="http://wpgraphicator.andrasweb.com/wp-content/themes/astra-child/demo.js">
    </script>
    <script type="text/javascript"
        src="http://wpgraphicator.andrasweb.com/wp-content/plugins/wpgraphicator/assets/admin/js/editor.build.min.js">
    </script>
    <script type="text/javascript">
        jQuery(function () {
            wpgEditor.instance.setState('projectID', 1);
        });
    </script>
