document.addEventListener('DOMContentLoaded', () => {
    const containers = document.querySelectorAll('.zoom-parallax-container');
    if (!containers.length) return;

    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const windowHeight = window.innerHeight;

        containers.forEach(container => {
            const cards = container.querySelectorAll('.zoom-card-wrapper');
            const offsetTop = container.offsetTop;
            const sectionHeight = container.offsetHeight;

            // 'start': when top of container meets top of viewport
            // 'end': when bottom of container meets bottom of viewport
            const start = offsetTop;
            const end = offsetTop + sectionHeight - windowHeight;

            let progress = (scrollTop - start) / (end - start);
            progress = Math.max(0, Math.min(1, progress));

            const scaleRanges = [
                [1, 4], // Index 0
                [1, 5], // Index 1
                [1, 6], // Index 2
                [1, 5], // Index 3
                [1, 6], // Index 4
                [1, 8], // Index 5
                [1, 9]  // Index 6
            ];

            cards.forEach((card, index) => {
                const range = scaleRanges[index % scaleRanges.length];
                const [min, max] = range;
                const currentScale = min + (max - min) * progress;

                card.style.transform = `scale(${currentScale}) translateY(-50%)`; // Keep translateY for centering
            });
        });
    });
});
