$(document).ready(function () {
    sidebar.init()
    confirmDelete.init()
    confirmDeactivate.init();
    fileInput.init()
})

const sidebar = (function () {
    const init = () => {
        highlightModule()
    }

    const highlightModule = () => {
        const $navSidebar = $('.sidebar-main')
        var path = window.location.pathname.split('/');
        let lastSegment = path[path.length - 1];
        if (lastSegment == 'create') {
            path = path[path.length - 2];
        } else if (lastSegment == 'edit') {
            path = path[path.length - 3];
        } else {
            path = lastSegment;
        }
        console.log($navSidebar.find("a[href$='" + path + "']").closest('li').children())
        if (path !== undefined) {
            $navSidebar.find("a[href$='" + path + "']").closest('li').children().addClass('active');
            $navSidebar.find("a[href$='" + path + "']").closest('li').addClass('active');
            $navSidebar.find("a[href$='" + path + "']").parents().eq(2).addClass('active');
            $navSidebar.find("a[href$='" + path + "']").parents().eq(1).css('display','block');
            $("li.sidebar-list.active .according-menu .fa-angle-right").removeClass('fa-angle-right')
            $("li.sidebar-list.active .according-menu .fa").addClass('fa-angle-down');

        }
    }

    return {
        init,
    }
})()

const confirmDelete = (function () {
    const $modal = $('#confirmDeleteModal')
    const $deleteBtn = $('.btn-delete')
    const $deleteForm = $modal.find('form')

    const init = () => {
        attachEventListeners()
    }

    const attachEventListeners = () => {
        $deleteBtn.on('click', handleDeleteBtnClick)
        $modal.on('hidden.bs.modal', handleModalHidden)
    }

    const handleDeleteBtnClick = function () {

        const url = $(this).data('href')
        setDeleteUrl(`${url}?_method=DELETE`)
    }

    const handleModalHidden = function () {
        setDeleteUrl('')
    }

    const setDeleteUrl = url => {
        $deleteForm.attr('action', url)
    }

    return {
        init,
    }
})()
const confirmDeactivate = (function () {
    const $modal = $('#confirmDeactivateModal')
    const $deleteBtn = $('.btn-delete')
    const $deleteForm = $modal.find('form')

    const init = () => {
        attachEventListeners()
    }

    const attachEventListeners = () => {
        $deleteBtn.on('click', handleDeleteBtnClick)
        $modal.on('hidden.bs.modal', handleModalHidden)
    }

    const handleDeleteBtnClick = function () {
        const url = $(this).data('href')
        setDeleteUrl(`${url}?_method=DELETE`)
    }

    const handleModalHidden = function () {
        setDeleteUrl('')
    }

    const setDeleteUrl = url => {
        $deleteForm.attr('action', url)
    }

    return {
        init,
    }
})()

const fileInput = (function () {
    const init = function () {
        $(document).on('change', '.custom-file-input', function () {
            let files = []
            for (let i = 0; i < $(this)[0].files.length; i++) {
                files.push($(this)[0].files[i].name)
            }
            $(this).next('.custom-file-label').html(files.join(', '))
        })
    }

    return {
        init,
    }
})()
