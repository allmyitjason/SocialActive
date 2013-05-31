{{Former::date('trial[commencementDate]','Commencement Date')->value(date('Y-m-d'))}}
{{Former::select('trial[grower_id]','Grower')->fromQuery(Peracto\Grower::active()->get(),'name' ,'id')}}
{{Former::select('trial[site_id]','Site')->id('site_id')->fromQuery(Peracto\Site::active()->get(),'name', 'id')}}
{{Former::select('trial[region_id]','Region')->id('region_id')->fromQuery(Peracto\Region::active()->get(),'name', 'id')}}
{{Former::select('trial[crop_id]','Crop')->fromQuery(Peracto\Crop::active()->get(),'name' ,'id')}}
{{Former::select('trial[industry_id]','Industry')->fromQuery(Peracto\Industry::active()->get(),'name', 'id')}}
{{Former::select('trial[trial_type_id]','Trial Type')->fromQuery(Peracto\TrialType::active()->get(),'name','id')}}
{{Former::select('target[]','Target 1')->fromQuery(Peracto\Target::active()->get())}}
{{Former::select('target[]','Target 2')->fromQuery(Peracto\Target::active()->get())}}
{{Former::textarea('trial[notes]','Notes')}}
{{Former::submit()->class('btn btn-success')}}