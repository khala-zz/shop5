<div class="block sidebar-html">
    <h3 class="block-title">Dịch vụ hỗ trợ</h3>
    <div class="widget-content">
        <div class="rte-setting">
            <div class="services-sidebar">
                <ul>
                    @foreach(getFourSetting()  as $setting)
                        <li>
                            {!! $setting -> setting_value!!}
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>