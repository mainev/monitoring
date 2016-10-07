@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="">

            @if (count($stockcards) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Stockcards
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
								<th>Audit Date</th>
                                <th>Company</th>
                            </thead>
                            <tbody>
                                @foreach ($stockcards as $stockcard)
                                    <tr>
										<td class="table-text"><div>{{ $stockcard->audit_date }}</div></td>
                                        <td class="table-text"><div>{{ $stockcard->company_descs }}</div></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
          
        </div>
    </div>
@endsection
