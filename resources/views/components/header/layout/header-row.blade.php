@php
    use EightyNine\Reports\Enums\VerticalAlignment;
    use EightyNine\Reports\Enums\HorizontalAlignment;

    $verticalAlignment = match ($getVerticalAlignment()) {
        VerticalAlignment::Top => 'vertical-align:top;',
        VerticalAlignment::Middle => 'vertical-align:middle;',
        VerticalAlignment::Bottom => 'vertical-align:bottom;',
    };

    $horizontalAlignment = match ($getHorizontalAlignment()) {
        HorizontalAlignment::Right => 'text-align:right;',
        HorizontalAlignment::Left => 'text-align:left;',
        HorizontalAlignment::Center => 'text-align:center;',
    };
@endphp
<table style="width:100%">
    <tr>
        @foreach ($getChildComponents() as $reportComponent)
            <td style="
            {{ $horizontalAlignment }}}
            {{ $verticalAlignment }}}
            ">
                {{ $reportComponent }}
            </td>
        @endforeach
    </tr>
</table>
