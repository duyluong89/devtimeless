<div class="row-fluid list-user">
<h3 class="header smaller lighter blue">jQuery dataTables</h3>

<div class="table-header right-align pright-10">
    <div class="actions">
        <select>
            <option value="">choose action</option>
            <option value="">Delete selected</option>
            <option value="">Change status</option>
        </select>
        <button class="btn btn-small btn-danger ">
           <?php echo "Create New"?>
        </button>

    </div>
</div>

<table id="sample-table-2" class="table table-striped table-bordered table-hover">
<thead>
<tr>
    <th class="center">
        <label>
            <input type="checkbox"/>
            <span class="lbl"></span>
        </label>
    </th>
    <th>Full Name</th>
    <th>User</th>
    <th class="hidden-480">Clicks</th>

    <th class="hidden-phone">
        <i class="icon-time bigger-110 hidden-phone"></i>
        Update
    </th>
    <th class="hidden-480">Status</th>

    <th></th>
</tr>
</thead>

<tbody>
<tr>
    <td class="center">
        <label>
            <input type="checkbox"/>
            <span class="lbl"></span>
        </label>
    </td>

    <td>
        <a href="#">app.com</a>
    </td>
    <td>$45</td>
    <td class="hidden-480">3,330</td>
    <td class="hidden-phone">Feb 12</td>

    <td class="hidden-480">
        <span class="label label-warning">Expiring</span>
    </td>

    <td class="td-actions">
        <div class="hidden-phone visible-desktop action-buttons">
            <a class="blue" href="#">
                <i class="icon-zoom-in bigger-130"></i>
            </a>

            <a class="green" href="#">
                <i class="icon-pencil bigger-130"></i>
            </a>

            <a class="red" href="#">
                <i class="icon-trash bigger-130"></i>
            </a>
        </div>

        <div class="hidden-desktop visible-phone">
            <div class="inline position-relative">
                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-caret-down icon-only bigger-120"></i>
                </button>

                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                    <li>
                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																	<span class="blue">
																		<i class="icon-zoom-in bigger-120"></i>
																	</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																	<span class="green">
																		<i class="icon-edit bigger-120"></i>
																	</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="icon-trash bigger-120"></i>
																	</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </td>
</tr>

</tbody>
</table>
</div>
