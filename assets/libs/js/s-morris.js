Morris.Donut({
    element: 'm-d-summary',
    data: [
        { value: 63, label: 'Actual Spent' },
        { value: 37, label: 'Remaining Budget' }
    ],
 
    labelColor: '#2e2f39',
       gridTextSize: '12px',
    colors: [
        "#14213d",
        "#fca311"      
    ],

    formatter: function(x) { return x + "%" },
      resize: true
});
Morris.Bar({
    element: 'm-b-dswd',
    data: [
        { x: 'DSWD', y: 129001434602, z: 205000000000}
    ],
    xkey: 'x',
    ykeys: ['y','z'],
    labels: ['Actual spent', 'Planned spending'],
    barColors: [
        "#14213d",
        "#fca311"  
    ],
    resize: true,
    gridTextSize: '12px',
    hideHover: true
});
Morris.Bar({
    element: 'm-b-dole',
    data: [
        { x: 'DOLE', y: 6349000000, z: 7050000000}
    ],
    xkey: 'x',
    ykeys: ['y','z'],
    labels: ['Actual spent', 'Planned spending'],
    barColors: [
        "#14213d",
        "#fca311"  
    ],
    resize: true,
    gridTextSize: '12px',
    hideHover: true
});
Morris.Bar({
    element: 'm-b-dof',
    data: [
        { x: 'DOF', y: 45620000000, z: 51000000000}
    ],
    xkey: 'x',
    ykeys: ['y','z'],
    labels: ['Actual spent', 'Planned spending'],
    barColors: [
        "#14213d",
        "#fca311"  
    ],
    resize: true,
    gridTextSize: '12px',
    hideHover: true
});
Morris.Bar({
    element: 'm-b-da',
    data: [
        { x: 'DA', y: 4701018249, z: 8500000000}
    ],
    xkey: 'x',
    ykeys: ['y','z'],
    labels: ['Actual spent', 'Planned spending'],
    barColors: [
        "#14213d",
        "#fca311"  
    ],
    resize: true,
    gridTextSize: '12px',
    hideHover: true
});
Morris.Bar({
    element: 'm-b-doh',
    data: [
        { x: 'DOH', y: 40358800000, z: 51864896630}
    ],
    xkey: 'x',
    ykeys: ['y','z'],
    labels: ['Actual spent', 'Planned spending'],
    barColors: [
        "#14213d",
        "#fca311"  
    ],
    resize: true,
    gridTextSize: '12px',
    hideHover: true
});
Morris.Bar({
    element: 'm-b-lgu',
    data: [
        { x: 'LGU', y: 5493840666, z: 37021047019}
    ],
    xkey: 'x',
    ykeys: ['y','z'],
    labels: ['Actual spent', 'Planned spending'],
    barColors: [
        "#14213d",
        "#fca311"  
    ],
    resize: true,
    gridTextSize: '12px',
    hideHover: true
});