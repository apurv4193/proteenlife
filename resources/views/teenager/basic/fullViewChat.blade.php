<div class="mck-container">
    <div class="left mck-message-inner-left">
        <div class="panel-content">
            <div class="mck-box-top mck-row mck-wt-user-icon">
                <div class="blk-lg-3">
                    <div id="mck-user-icon" class="mck-user-icon"></div>
                </div>
                <div class="blk-lg-7">
                    <h4 id="mck-box-title" class="mck-box-title mck-truncate">Conversations</h4>
                </div>
                <div class="blk-lg-2 move-right mck-menu-item mck-text-right">
                    <div class="mck-dropdown-toggle" data-toggle="mckdropdown"
                         aria-expanded="true">
                        <img src="{{asset('chat/images/icon-menu.png')}}" class="mck-menu-icon"
                             alt="Menu">
                    </div>
                    <ul id="mck-start-new-menu-box"
                        class="mck-dropdown-menu mck-tab-menu-box menu-right" role="menu">
                        <li><a href="javascript:void(0);" id="mck-msg-new" class="mck-contact-search menu-item"
                               title="New Chat">New Chat</a></li>
                        <li><a href="javascript:void(0);" class="mck-contact-search menu-item"
                               title="Contacts">Contacts</a></li>
                        <li><a href="javascript:void(0);" class="mck-group-search menu-item"
                               title="Groups">Groups</a></li>
                        <li><a href="javascript:void(0);" id="mck-new-group" class="menu-item"
                               title="Create Group">Create Group</a></li>
                    </ul>
                </div>
            </div>
            <div class="top">
                <span class="mck-search-icon"> <a href="#" role="link"
                                                  class="mck-tab-search"> <span class="mck-icon-search"></span>
                    </a>
                </span> <input type="text" id="mck-search" data-provide="typeahead"
                               placeholder="Search..."/>
            </div>
            <div class="mck-panel-body">
                <div id="mck-contact-cell" class="mck-panel-cell">
                    <div class="mck-panel-inner mck-contacts-inner">
                        <ul id="mck-contact-list"
                            class="people mck-contact-list mck-nav mck-nav-tabs mck-nav-stacked">
                    </div>
                    <div id="mck-contact-loading" class="mck-loading">
                        <img src="{{asset('chat/images/ring.gif')}}">
                    </div>
                    <div id="mck-no-contact-text"
                         class="mck-no-data-text mck-text-muted n-vis">No
                        conversations yet!</div>
                    <div id="mck-show-more-icon" class="mck-show-more-icon n-vis">
                        <h3>No more conversations!</h3>
                    </div>
                </div>
            </div>
            </ul>
        </div>
    </div>
    <div class="right">
        <div class="panel-content">
            <div id="mck-tab-header" class="mck-box-top n-vis">
                <div id="mck-tab-individual" class="mck-tab-individual mck-row">
                    <div class="blk-lg-8 mck-box-title">
                        <div id="mck-group-tab-title" class="n-vis">
                            <a id="mck-tab-info" href="#" class="mck-tab-info">
                                <div class="mck-tab-title mck-truncate name"></div>
                                <div class="mck-tab-status mck-truncate n-vis"></div>
                                <div class="mck-typing-box mck-truncate n-vis">
                                    <span class="name-text">typing...</span>
                                </div>
                            </a>
                        </div>
                        <div id="mck-individual-tab-title"
                             class="mck-individual-tab-title">
                            <div class="mck-tab-title mck-truncate name"></div>
                            <div class="mck-tab-status mck-truncate n-vis"></div>
                            <div class="mck-typing-box mck-truncate n-vis">
                                <span class="name-text">typing...</span>
                            </div>
                        </div>
                    </div>
                    <div id="mck-btn-video-call" class="mck-videocall-btn  blk-lg-2 n-vis"></div>
                    <div class="blk-lg-2 move-right">
                        <div id="mck-tab-menu" class="mck-menu-item mck-text-right">
                            <div class="mck-dropdown-toggle" data-toggle="mckdropdown"
                                 aria-expanded="true">
                                <img src="{{asset('chat/images/icon-menu.png')}}" class="mck-menu-icon"
                                     alt="Tab Menu">
                            </div>
                            <ul id="mck-tab-menu-list"
                                class="mck-dropdown-menu mck-tab-menu-box menu-right"
                                role="menu">
                                <li class="mck-tab-message-option vis"><a href="javascript:void(0);"
                                                                          id="mck-delete-button" class="mck-delete-button menu-item vis"
                                                                          title="Clear Messages"> Clear Messages </a></li>
                                <li id="li-mck-block-user" class="vis"><a href="javascript:void(0);"
                                                                          id="mck-block-button" class="menu-item" title="Block User">Block
                                        User</a></li>
                                <li id="li-mck-group-info" class="mck-group-menu-options n-vis"><a
                                        href="javascript:void(0);" id="mck-group-info-btn"
                                        class="menu-item mck-group-info-btn" title="Group Info">
                                        Group Info </a></li>
                                <li id="li-mck-leave-group"
                                    class="mck-group-menu-options n-vis"><a href="javascript:void(0);"
                                                                        id="mck-leave-group-btn" class="menu-item" title="Exit Group">
                                        Exit Group </a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div id="mck-video-call-indicator" class="applozic-launchar n-vis row">
                    <div id="mck-video-call-icon" class="col-lg-3 mck-alpha-contact-image">
                        <span class="mck-contact-icon"></span>
                    </div>
                    <div id="mck-vid-btn" class="mck-vid-flex-box">
                        <div id="mck-video-call-indicator-txt" class="mck-video-call-indicator-txt"></div>
                        <div id="mck-call-btn-div" class= "col-lg-8">
                            <button id="mck-vid-receive-btn" class="mck-btn">Accept</button>
                            <button id="mck-vid-reject-btn" class="mck-btn">Reject</button>
                        </div>
                    </div>

                </div>
            </div>

            <div id="mck-product-group"
                 class="mck-tab-panel mck-btn-group mck-product-group">
                <div id="mck-product-box"
                     class="mck-product-box n-vis mck-dropdown-toggle"
                     data-toggle="mckdropdown" aria-expanded="true">
                    <div class="mck-row">
                        <div class="blk-lg-10">
                            <div class="mck-row">
                                <div class="blk-lg-3 mck-product-icon"></div>
                                <div class="blk-lg-9">
                                    <div class="mck-row">
                                        <div class="blk-lg-8 mck-product-title mck-truncate"></div>
                                        <div
                                            class="blk-lg-4 move-right mck-product-rt-up mck-truncate">
                                            <strong class="mck-product-key"></strong>:<span
                                                class="mck-product-value"></span>
                                        </div>
                                    </div>
                                    <div class="mck-row">
                                        <div class="blk-lg-8 mck-truncate mck-product-subtitle"></div>
                                        <div
                                            class="blk-lg-4 move-right mck-product-rt-down mck-truncate">
                                            <strong class="mck-product-key"></strong>:<span
                                                class="mck-product-value"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blk-lg-2 mck-text-center">
                            <span class="mck-caret n-vis"></span>
                        </div>
                    </div>
                </div>
                <ul id="mck-conversation-list"
                    class="mck-dropdown-menu menu-right mck-conversation-list n-vis"
                    role="menu"></ul>
            </div>
            <div class="mck-panel-body">
                <div id="mck-message-cell" class="mck-message-cell mck-panel-cell">
                    <div id="conversation-section" class="conversation-section">
                        <div class="chat mck-message-inner mck-panel-inner"
                             data-mck-id="${contIdExpr}"></div>
                        <div id="mck-msg-loading" class="mck-loading n-vis">
                            <img src="{{asset('chat/images/ring.gif')}}">
                        </div>
                        <div id="mck-no-more-messages"
                             class="mck-no-more-messages mck-show-more-icon n-vis">
                            <h3>No more messages!</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="write">
                <!-- Create message send form -->
                <div id="mck-sidebox-ft" class="mck-box-ft mck-panel-ft">
                    <div class="mck-box-form mck-row n-vis">
                        <div class="blk-lg-12">
                            <p id="mck-msg-error" class="mck-sidebox-error n-vis"></p>
                        </div>
                        <div class="blk-lg-12">
                            <p id="mck-msg-response" class="mck-box-response n-vis"></p>
                        </div>
                        <div  id="mck-reply-to-div" class="n-vis">
                            <button type="button" id="close"
                                    class="mck-box-close mck-close-panel move-right">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div id="mck-reply-to" class=" mck-msgto "></div>
                            <div id="mck-reply-msg"> </div>
                        </div>
                        <div id="mck-write-box" class="blk-lg-12 mck-write-box">
                            <form id="mck-msg-form" class="vertical mck-msg-form">
                                <div class="mck-form-group n-vis">
                                    <label class="sr-only placeholder-text control-label"
                                           for="mck-msg-to">To:</label> <input class="mck-form-cntrl"
                                           id="mck-msg-to" name="mck-msg-to" placeholder="To" required>
                                </div>

                                <input id="mck-file-input" class="mck-file-input n-vis"
                                       type="file" name="files[]">
                                <div id="mck-btn-attach" class="mck-btn-attach">
                                    <div class="mck-dropdown-toggle" data-toggle="mckdropdown"
                                         aria-expanded="true">
                                        <a href="#" type="button" id="mck-btn-attach"
                                           class="write-link attach mck-btn-text-panel"
                                           aria-expanded="true" title="Attach File"> </a>
                                    </div>
                                    <ul id="mck-upload-menu-list"
                                        class="mck-dropup-menu mck-upload-menu-list" role="menu">
                                        <li><a id="mck-file-up" href="javascript:void(0);"
                                               class="mck-file-upload menu-item" title="File &amp; Photos">

                                                <img src="{{asset('chat/images/mck-icon-photo.png')}}"
                                                     class="menu-icon" alt="File &amp; Photos"> <span>Files
                                                    &amp; Photos</span>
                                            </a></li>
                                        <li><a id="mck-btn-loc" href="javascript:void(0);" class="menu-item"
                                               title="Location"> <img
                                                    src="{{asset('chat/images/mck-icon-marker.png')}}" class="menu-icon"
                                                    alt="Location"> <span>Location</span>
                                            </a></li>

                                    </ul>
                                </div>
                                <a href="javascript:void(0);" id="mck-file-up2" type="button"
                                   class="write-link attach n-vis mck-file-upload mck-btn-text-panel"
                                   title="Attach File"> </a>
                                <a href="javascript:void(0);" id="mck-mike-btn" type="button"
                                   class="mck-mic-btn mck-mike-btn vis"
                                   title="Mike"></a>
                                <a href="javascript:void(0);" id="stop-recording" class="mck-stop-btn n-vis "></a>
                                <div id="audiodiv" class="mck-mic-timer n-vis">
                                    <label id="mck-minutes">00</label>:<label id="mck-seconds">00</label>
                                </div>
                                <span id="mck-text-box"
                                      contenteditable="true" class="mck-text-box mck-text required"></span>
                                <a href="javascript:void(0);" type="submit"
                                   id="mck-msg-sbmt" class="write-link send mck-btn-text-panel"
                                   title="Send Message"></a>
                                <a href="javascript:void(0);" type="button" id="mck-btn-smiley"
                                   class="write-link smiley mck-btn-smiley mck-btn-text-panel"
                                   title="Smiley"></a>
                            </form>
                        </div>
                        <div class="blk-lg-12">
                            <div id="mck-file-box" class="n-vis"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mck-group-create-tab"
         class="mck-group-create-tab mck-panel-sm mck-panel n-vis">
        <div class="panel-content">
            <div class="mck-box-top">
                <div class="blk-lg-10">
                    <div class="mck-box-title mck-truncate" title="Create Group">Create
                        Group</div>
                </div>
                <div class="blk-lg-2">
                    <button type="button" id="mck-group-create-close"
                            class="mck-box-close mck-close-panel move-right">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="mck-box-body">
                <div class="mck-tab-cell">
                    <div id="mck-group-create-panel"
                         class="mck-tab-panel mck-message-inner mck-group-create-inner">
                        <div class="mck-group-sub-sec">
                            <div id="mck-group-create-icon-box"
                                 class="mck-group-create-icon-box mck-group-icon-box mck-hover-on">
                                <div class="mck-group-icon"></div>
                                <span class="mck-overlay-box">
                                    <div class="mck-overlay">
                                        <span class="mck-camera-icon"></span> <span
                                            class="mck-overlay-label">Add Group Icon</span>
                                    </div>
                                    <div id="mck-group-create-icon-loading"
                                         class="mck-loading n-vis">
                                        <img src="{{asset('chat/images/mck-loading.gif')}}" />
                                    </div> <input id="mck-group-icon-upload"
                                                  class="mck-group-icon-upload n-vis" type="file" name="files[]">
                                </span>
                            </div>
                        </div>
                        <div id="mck-group-create-name-sec" class="mck-group-sub-sec">
                            <div id="mck-group-create-name-box"
                                 class="mck-row mck-group-name-box">
                                <div class="blk-lg-12">
                                    <div class="mck-label">Group Title</div>
                                </div>
                                <div class="blk-lg-12">
                                    <div id="mck-group-create-title"
                                         class="mck-group-create-title mck-group-title"
                                         contenteditable="true">Group title</div>
                                </div>
                            </div>
                        </div>
                        <div id="mck-group-create-type-sec" class="mck-group-sub-sec">
                            <div id="mck-group-create-type-box"
                                 class="mck-row mck-group-type-box">
                                <div class="blk-lg-12">
                                    <div class="mck-label">Group Type</div>
                                </div>
                                <div class="blk-lg-12">
                                    <select id="mck-group-create-type" class="mck-select">
                                        <option value="2" selected>Public</option>
                                        <option value="1">Private</option>
                                        <option value="6">Open</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="mck-group-create-btn-sec" class="mck-group-sub-sec">
                            <button type="button" id="mck-btn-group-create"
                                    class="mck-btn mck-btn-green mck-btn-group-create"
                                    title="Create Group">Create Group</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mck-group-info-tab"
         class="mck-group-info-tab mck-panel-sm mck-panel n-vis">
        <div class="panel-content">
            <div class="mck-box-top">
                <div class="blk-lg-10">
                    <div class="mck-box-title mck-truncate" title="Group Info">Group
                        Info</div>
                </div>
                <div class="blk-lg-2">
                    <button type="button" id="mck-group-info-close"
                            class="mck-box-close mck-close-panel move-right">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div id="mck-group-detail-panel" class="mck-group-detail-box">
                <div class="mck-group-icon-sec">
                    <div id="mck-group-info-icon-box"
                         class="mck-group-icon-box mck-group-info-icon-box mck-hover-on">
                        <div class="mck-group-icon"></div>
                        <span class="mck-overlay-box n-vis">
                            <div class="mck-overlay">
                                <span class="mck-camera-icon"></span> <span
                                    class="mck-overlay-label">Change Group Icon</span>
                            </div>
                            <div id="mck-group-info-icon-loading" class="mck-loading n-vis">
                                <img src="{{asset('chat/images/mck-loading.gif')}}" />
                            </div> <input id="mck-group-icon-change"
                                          class="mck-group-icon-change n-vis" type="file" name="file[]" />
                        </span>
                    </div>
                    <div class="mck-text-center">
                        <a id="mck-btn-group-icon-save" href="#" role="link"
                           class="mck-btn-group-icon-save n-vis" title="Click to save">
                            <img src="{{asset('chat/images/mck-icon-save.png')}}" alt="Save">
                        </a>
                    </div>
                </div>
                <div id="mck-group-name-sec" class="mck-group-name-sec">
                    <div id="mck-group-name-box" class="mck-row mck-group-name-box">
                        <div class="blk-lg-9">
                            <div id="mck-group-title" class="mck-group-title"
                                 contenteditable="false">Group title</div>
                        </div>
                        <div class="blk-lg-3 mck-group-name-edit-icon">
                            <a id="mck-group-name-edit" href="#" role="link"
                               class="mck-group-name-edit vis" title="Edit"> <img
                                    src="{{asset('chat/images/mck-icon-write.png')}}" alt="Edit"></a> <a
                                id="mck-group-name-save" href="#" role="link"
                                class="mck-group-name-save n-vis" title="Click to save"> <img
                                    src="{{asset('chat/images/mck-icon-save.png')}}" alt="Save"></a>
                        </div>
                    </div>
                </div>
                <div id="mck-group-member-panel"
                     class="mck-tab-panel mck-group-member-panel vis">
                    <div class="mck-group-md-sec">
                        <div class="mck-row mck-group-member-text">Members</div>
                        <div id="mck-group-add-member-box"
                             class="mck-row mck-group-admin-options mck-group-add-member-box n-vis">
                            <a id="mck-group-add-member" class="mck-group-add-member"
                               href="#">
                                <div class="blk-lg-3">
                                    <img src="{{asset('chat/images/mck-icon-add-member.png')}}"
                                         alt="Add Member">
                                </div>
                                <div class="blk-lg-9">Add member</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mck-box-body">
                <div class="mck-tab-cell">
                    <div class="mck-group-member-inner">
                        <ul id="mck-group-member-list"
                            class="mck-group-member-list mck-contact-list mck-nav mck-nav-tabs mck-nav-stacked">
                        </ul>
                    </div>
                </div>
            </div>
            <div id="mck-group-update-panel"
                 class="mck-tab-panel mck-group-update-panel n-vis">
                <div class="mck-group-bottom-sec">
                    <div class="mck-row mck-group-update-sec">
                        <button type="button" id="mck-btn-group-update"
                                class="mck-btn mck-btn-green mck-btn-group-update"
                                title="Update">Update</button>
                    </div>
                </div>
            </div>
            <div id="mck-group-info-ft" class="mck-group-info-ft">
                <button type="button" id="mck-btn-group-exit"
                        class="mck-btn mck-btn-blue mck-btn-group-exit" title="Exit Group">Exit
                    Group</button>
            </div>
        </div>
    </div>
</div>
<div id="mck-loc-box" class="mck-box mck-loc-box fade"
     aria-hidden="false">
    <div class="mck-box-dialog mck-box-md">
        <div class="mck-box-content">
            <div class="mck-box-top mck-row">
                <div class="blk-lg-10">
                    <h4 class="mck-box-title">Location Sharing</h4>
                </div>
                <div class="blk-lg-2">
                    <button type="button" class="mck-box-close" data-dismiss="mckbox"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="mck-box-body">
                <div class="mck-form-group">
                    <div class="blk-lg-12">
                        <input id="mck-loc-address" type="text" class="mck-form-control"
                               placeholder="Enter a location" autocomplete="off">
                    </div>
                </div>
                <div id="mck-map-content" class="mck-loc-content"></div>
                <div class="n-vis">
                    <label class="blk-sm-2 mck-control-label">Lat.:</label>
                    <div class="blk-sm-3">
                        <input type="text" id="mck-loc-lat" class="mck-form-control">
                    </div>
                    <label class="blk-sm-2 mck-control-label">Long.:</label>
                    <div class="blk-sm-3">
                        <input type="text" id="mck-loc-lon" class="mck-form-control">
                    </div>
                </div>
            </div>
            <div class="mck-box-footer">
                <button id="mck-my-loc" type="button"
                        class="mck-my-loc mck-btn mck-btn-green">My Location</button>
                <button id="mck-loc-submit" type="button"
                        class="mck-btn mck-btn-blue mck-loc-submit move-right">Send</button>
                <button type="button" class="mck-btn mck-btn-default move-right"
                        data-dismiss="mckbox">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="mck-contact-search-box"
     class="mck-box mck-contact-search-box mck-sm-modal-box fade"
     aria-hidden="false">
    <div class="mck-box-dialog mck-box-sm">
        <div class="mck-box-content">
            <div class="mck-box-top mck-row">
                <div class="blk-lg-10">
                    <h4 class="mck-box-title" title="New Chat">New Chat</h4>
                </div>
                <div class="blk-lg-2">
                    <button type="button" class="mck-box-close" data-dismiss="mckbox"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div id="mck-search-tab-box" class="mck-search-tab-box mck-row">
                <div class="blk-lg-12">
                    <ul class="mck-nav mck-nav-panel">
                        <li class="mck-nav-item mck-nav-divider"><a
                                id="mck-contact-search-tab"
                                class="mck-nav-link mck-contact-search active" href="javascript:void(0);"><strong>Contacts</strong></a></li>
                        <li class="mck-nav-item"><a id="mck-group-search-tab"
                                                    class="mck-nav-link mck-group-search" href="javascript:void(0);"><strong>Groups</strong></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mck-box-body">
                <div class="mck-form-group">
                    <div id="mck-contact-search-input-box"
                         class="mck-input-group blk-lg-12">
                        <input id="mck-contact-search-input" type="text"
                               data-provide="typeahead" placeholder="Search..."/> <span
                               class="mck-search-icon"><a href="#" role="link"
                                                   class="mck-contact-search-link"><span
                                    class="mck-icon-search"></span></a></span>
                    </div>
                    <div id="mck-group-search-input-box"
                         class="mck-input-group blk-lg-12 n-vis">
                        <input id="mck-group-search-input" type="text"
                               data-provide="typeahead" placeholder="Search..."/> <span
                               class="mck-search-icon"><a href="#" role="link"
                                                   class="mck-group-search-link"><span class="mck-icon-search"></span></a></span>
                    </div>
                </div>
                <div class="mck-tab-cell">
                    <div class="mck-message-inner">
                        <ul id="mck-contact-search-list"
                            class="mck-contact-list mck-contact-search-list mck-nav mck-nav-tabs mck-nav-stacked"></ul>
                        <ul id="mck-group-search-list"
                            class="mck-contact-list mck-group-search-list mck-nav mck-nav-tabs mck-nav-stacked n-vis"></ul>
                        <div id="mck-no-search-contacts" class="mck-show-more-icon n-vis">
                            <h3>No contacts yet!</h3>
                        </div>
                        <div id="mck-no-search-groups" class="mck-show-more-icon n-vis">
                            <h3>No groups yet!</h3>
                        </div>
                        <div id="mck-search-loading" class="mck-loading n-vis">
                            <img src="{{asset('chat/images/ring.gif')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mck-goup-search-box"
     class="mck-box mck-group-search-box mck-sm-modal-box fade"
     aria-hidden="false">
    <div class="mck-box-dialog mck-box-sm">
        <div class="mck-box-content">
            <div class="mck-box-top mck-row">
                <div class="blk-lg-3">
                    <img src="{{asset('chat/images/mck-icon-add-member.png')}}" alt="Add Member">
                </div>
                <div class="blk-lg-7">
                    <h4 class="mck-box-title">Add Member</h4>
                </div>
                <div class="blk-lg-2">
                    <button type="button" class="mck-box-close" data-dismiss="mckbox"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="mck-box-body">
                <div class="mck-form-group">
                    <div class="mck-input-group blk-lg-12">
                        <input id="mck-group-member-search" type="text"
                               data-provide="typeahead" placeholder="Search..."/> <span
                               class="mck-search-icon"><a href="#" role="link"
                                                   class="mck-group-member-search-link"><span
                                    class="mck-icon-search"></span></a></span>
                    </div>
                </div>
                <div class="mck-tab-cell">
                    <div class="mck-message-inner">
                        <ul id="mck-group-member-search-list"
                            class=" mck-contact-list mck-group-search-list mck-nav mck-nav-tabs mck-nav-stacked"></ul>
                        <div id="mck-no-gsm-text"
                             class="mck-no-data-text mck-text-muted n-vis">No Users!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mck-video-box">
    <div class="container applozic-vid-container n-vis">
        <div class="row">
            <div id="mck-vid-media" class="col-lg-12">
                <div id="mck-audio-call-icon center-block"></div>
            </div>
        </div>
    </div>
    <div id="mck-vid-div-overlay" class="container applozic-vid-container n-vis">
        <div class="row mck-vid-overlay-header">
            <div id="mck-vid-icon" class="centered n-vis"><span></span></div>
        </div>
        <div class="row mck-vid-overlay-footer mck-flex-footer">
            <div class="mck-vid-scr-controls">
                <div class="footer-controls pull-right">
                    <button id="mck-microfone-mute-btn" class="btn-controls">
                        <svg id="mck-unmute-icon" class="mck-unmute-icon" focusable="false" height="24px" viewBox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14c1.66 0 2.99-1.34 2.99-3L15 5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z" />
                        </svg>
                        <svg id="mck-mute-icon" class="mck-mute-icon" focusable="false" height="24px" viewBox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11h-1.7c0 .74-.16 1.43-.43 2.05l1.23 1.23c.56-.98.9-2.09.9-3.28zm-4.02.17c0-.06.02-.11.02-.17V5c0-1.66-1.34-3-3-3S9 3.34 9 5v.18l5.98 5.99zM4.27 3L3 4.27l6.01 6.01V11c0 1.66 1.33 3 2.99 3 .22 0 .44-.03.65-.08l1.66 1.66c-.71.33-1.5.52-2.31.52-2.76 0-5.3-2.1-5.3-5.1H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c.91-.13 1.77-.45 2.54-.9L19.73 21 21 19.73 4.27 3z" />
                        </svg>
                    </button>
                    <button id="mck-vid-disconnect" class="btn-controls">
                        <svg class="mck-disconnect-icon" xmlns="http://www.w3.org/2000/svg" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" class=" A1NRff">
                        <path d="M12 9c-1.6 0-3.15.25-4.6.72v3.1c0 .39-.23.74-.56.9-.98.49-1.87 1.12-2.66 1.85-.18.18-.43.28-.7.28-.28 0-.53-.11-.71-.29L.29 13.08c-.18-.17-.29-.42-.29-.7 0-.28.11-.53.29-.71C3.34 8.78 7.46 7 12 7s8.66 1.78 11.71 4.67c.18.18.29.43.29.71 0 .28-.11.53-.29.71l-2.48 2.48c-.18.18-.43.29-.71.29-.27 0-.52-.11-.7-.28-.79-.74-1.69-1.36-2.67-1.85-.33-.16-.56-.5-.56-.9v-3.1C15.15 9.25 13.6 9 12 9z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="local-media" class="n-vis"></div>

        </div>
    </div>
</div>
<!-- Dummy div as js is dependent on mck-sidebox -->
<div id="mck-sidebox"></div>