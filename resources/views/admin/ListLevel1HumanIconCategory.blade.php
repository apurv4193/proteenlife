@extends('layouts.admin-master')

@section('content')
<!-- content push wrapper -->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{trans('labels.level1humaniconcategory')}}
        <a href="{{ url('admin/addHumanIconsCategory') }}" class="btn btn-block btn-primary add-btn-primary pull-right">{{trans('labels.add')}}</a>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box-header pull-right ">
                <i class="s_active fa fa-square"></i> {{trans('labels.activelbl')}} <i class="s_inactive fa fa-square"></i>{{trans('labels.inactivelbl')}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <table id="listHumanIconCategory" class="table table-striped display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>{{trans('labels.humaniconheadname')}}</th>
                                <th>{{trans('labels.totalcartoonicon')}}</th>
                                <th>{{trans('labels.humaniconheadstatus')}}</th>
                                <th>{{trans('labels.humaniconheadaction')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; ?>
                            @forelse($categorys as $category)
                            <?php
                            $totalIcon = array();
                            $id = $category->id;
                            $type = 'nonfiction';
                            $totalIcon = Helpers::getCategoryIcon($id, $type);
                            $total = $totalIcon['individual'][$id] + $total;
                            ?>
                            <tr>
                                <td>
                                    {{$category->hic_name}}
                                </td>
                                <td>                                                               
                                    {{$totalIcon['individual'][$id]}}                                
                                </td>
                                <td>
                                    @if ($category->deleted == 1)
                                    <i class="s_active fa fa-square"></i>
                                    @else
                                    <i class="s_inactive fa fa-square"></i>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('/admin/editHumanIconCategory') }}/{{$category->id}}"><i class="fa fa-edit"></i> &nbsp;&nbsp;</a>

                                    <?php
                                    if ($totalIcon['individual'][$id] == '') {
                                        ?>
                                        <a onclick="return confirm('<?php echo trans('labels.confirmdelete'); ?>')" href="{{ url('/admin/deleteHumanIconCategory') }}/{{$category->id}}"><i class="i_delete fa fa-trash"></i></a>
                                        <?php
                                    } else {
                                        ?>  
                                        <a onclick="return alert('<?php echo trans('First delete icon and than try to delete category.'); ?>')" href="{{ url('/admin/humanIconsCategory') }}"><i class="i_delete fa fa-trash"></i></a>
                                        <?php
                                    }
                                    ?>     
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td><center>{{trans('labels.norecordfound')}}</center></td>
                            </tr>
                            @endforelse
                            <tr>
                                <th>Total</th>
                                <th>{{$total}}</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#listHumanIconCategory').DataTable();
    });
</script>
@stop