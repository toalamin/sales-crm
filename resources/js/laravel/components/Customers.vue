<template>
    <div class="table-responsive">
        <h2>{{ title }}</h2>
        <table class="table table-bordered table-striped table-vcenter">
            <thead>
            <tr>
                <th class="text-center" style="width: 100px;">
                    <i class="far fa-user"></i>
                </th>
                <th>Name</th>
                <th style="width: 30%;">Email</th>
                <th style="width: 15%;">Access</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center">
                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                </td>
                <td class="font-w600">
                    <a href="be_pages_generic_profile.html">Lori Grant</a>
                </td>
                <td>client1<em class="text-muted">@example.com</em></td>
                <td>
                    <span class="badge badge-primary">Personal</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                            <i class="fa fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                </td>
                <td class="font-w600">
                    <a href="be_pages_generic_profile.html">Megan Fuller</a>
                </td>
                <td>client2<em class="text-muted">@example.com</em></td>
                <td>
                    <span class="badge badge-info">Business</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                            <i class="fa fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                </td>
                <td class="font-w600">
                    <a href="be_pages_generic_profile.html">Amanda Powell</a>
                </td>
                <td>client3<em class="text-muted">@example.com</em></td>
                <td>
                    <span class="badge badge-success">VIP</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                            <i class="fa fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                </td>
                <td class="font-w600">
                    <a href="be_pages_generic_profile.html">Melissa Rice</a>
                </td>
                <td>client4<em class="text-muted">@example.com</em></td>
                <td>
                    <span class="badge badge-primary">Personal</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                            <i class="fa fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
                </td>
                <td class="font-w600">
                    <a href="be_pages_generic_profile.html">Lisa Jenkins</a>
                </td>
                <td>client5<em class="text-muted">@example.com</em></td>
                <td>
                    <span class="badge badge-primary">Personal</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                            <i class="fa fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['title']
    }
</script>
