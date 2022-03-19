<script>
    demo = {
        initCharts: function() {
            var dataPreferences = {
                labels: ['Mitra Driver 50%', 'Mitra Marchant 50%'],
                series: [50, 50]
            };

            var optionsPreferences = {
                height: '500px'
            };

            Chartist.Pie('#chartPreferences', dataPreferences, optionsPreferences);

        }
    }

    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initCharts();
    });
</script>