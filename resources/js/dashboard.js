document.addEventListener('DOMContentLoaded', () => {
    initializeDashboardCharts();
    initializeStatsCounter();
});

function initializeStatsCounter() {
    const counters = document.querySelectorAll('.stat-value[data-count]');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 1500;
        const step = Math.max(1, Math.floor(target / 60));
        let current = 0;

        function formatNumber(num) {
            if (num >= 1000000) return (num / 1000000).toFixed(1) + 'M';
            if (num >= 1000) return (num / 1000).toFixed(1) + 'K';
            return num.toLocaleString();
        }

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            counter.textContent = formatNumber(current);
        }, 25);
    });
}

function initializeDashboardCharts() {
    const charts = document.querySelectorAll('.chart-placeholder');
    charts.forEach((chart, index) => {
        chart.style.animationDelay = `${0.3 + index * 0.1}s`;
    });

    const popularMeals = document.querySelectorAll('.popular-meal-item');
    popularMeals.forEach((meal, index) => {
        meal.style.animationDelay = `${0.4 + index * 0.08}s`;
    });
}
