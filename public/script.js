const filterDiv = document.querySelector('.filter-div-off');
const filterButton = document.querySelector('.filter-button');
const range = document.querySelector('.range');
const rangeOutput = document.querySelector('.range-output');

// Class to handle UI events
class UI {
    static showFilter () {
        if (!filterDiv.classList.contains('filter-div-on')) {
            filterDiv.classList.add('filter-div-on');
        } else {
            filterDiv.classList.remove('filter-div-on');
        }
    }
    static showAmount () {
        rangeOutput.innerHTML = `$${range.value}`;
    }
}

// Showing filters
filterButton.addEventListener('click', UI.showFilter);

// Showing default amount when DOM content is loaded
document.addEventListener('DOMContentLoaded',UI.showAmount);
// Changing amount value
range.addEventListener('click', UI.showAmount);