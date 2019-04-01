let date = new Date();

let i = date.getMonth();

let days = data[i].days,
      firstDay = data[i].firstDay,
      month = data[i].month,
      weeks = data[i].weeks;

class MenuPmok {
    constructor(subD, tableId) {
        this.subD = subD;
        this.tableId = tableId;
        this.getTable = document.getElementById(tableId).innerHTML += `
            <tbody>
            ${thRender()}
            ${tdRender(this.subD)}
            </tbody>
            `;
    }
}
MenuPmok.daysWeek = 'Пн Вт Ср Чт Пт Сб Вс'.split(' ');

function thRender() {
    let result = '<tr>';
    for (let i = 0; i < 7; i++) {
        result += `<th>${MenuPmok.daysWeek[i]}</th>`;
    }
    return result += '</tr>';
}

function tdRender(url) {
    let result = '';
    let g = 1;
    let d = 1;
    for (let i = 0; i < weeks; i++) {
        result += '<tr>'
        for (let i = 0; i < 7; i++) {
            if (g < firstDay) {
                g++;
                result += `<td>&nbsp;</td>`;
            } else if (g < days + 1) {
                if (i === 5 || i === 6) {
                    if (d <= days) {
                        result += `<td>${access = (d < 10) ? 0 : ''}${d++}.${month}</td>`;
                    } else {
                        result += `<td>&nbsp;</td>`;
                    } 
                } else {
                    if (d <= days) {
                        result += `<td><a href="http://files.1-mok.ru/volan/${url}-${access = (d < 10) ? 0 : ''}${d}.${month}.pdf?v=${date.getDate()}.${date.getMonth() + 1}.${date.getFullYear()}" target="_blank">${access = (d < 10) ? 0 : ''}${d++}.${month}</a></td>`;
                    } else {
                            result += `<td>&nbsp;</td>`;
                        }
                }

            }

        }
        result += '</tr>'
    }

    return result;
}

window.onload = () => {

    let dsTable = new MenuPmok('ds', 'pmok-ds');
    let soshTable = new MenuPmok('sosh', 'pmok-sosh');
    let kTable = new MenuPmok('k', 'pmok-k');
    
    let pmokH = document.getElementById('pmok-h2');
    pmokH.innerText = pmokH.textContent.replace(/{{year}}/g, `${date.getFullYear()}`);

    let foodDiv = document.getElementById('pmok-food');
    let textForm = document.getElementById('text-area-input');
    textForm.innerText = foodDiv.outerHTML.replace(/  /g, '');

};