// Floor plan dynamic slider
document.querySelectorAll('.tab-btn').forEach((button, index) => {
    button.addEventListener('click', () => {
        // 1. બધા કન્ટેન્ટ છુપાવો (content1, content2, content3 વગેરે)
        document.querySelectorAll('[id^="content"]').forEach(content => {
            content.classList.add('hidden');
        });

        // 2. ક્લિક કરેલા ટેબનું કન્ટેન્ટ બતાવો
        const targetContent = document.getElementById('content' + (index + 1));
        if (targetContent) {
            targetContent.classList.remove('hidden');
        }

        // 3. બધા બટનમાંથી બ્લેક બોર્ડર કાઢી નાખો અને ગ્રે કરો
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('border-black');
            btn.classList.add('text-gray-400', 'border-transparent');
        });

        // 4. જે બટન ક્લિક થયું તેને બ્લેક કરો
        button.classList.add('border-black');
        button.classList.remove('text-gray-400', 'border-transparent');
    });
});