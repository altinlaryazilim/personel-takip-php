// Personel Takip Sistemi

// Personel bilgilerini tutmak için bir dizi
var employees = [];

// Yeni bir personel eklemek için fonksiyon
function addEmployee(name, surname, startDate) {
    var employee = {
        name: name,
        surname: surname,
        startDate: startDate,
        workHours: []
    };
    employees.push(employee);
}

// Çalışma saatlerini kaydetmek için fonksiyon
function recordWorkHours(employeeIndex, entryTime, exitTime) {
    var workHour = {
        entryTime: entryTime,
        exitTime: exitTime
    };
    employees[employeeIndex].workHours.push(workHour);
}

// Bir personelin toplam çalışma saatini hesaplamak için fonksiyon
function calculateTotalWorkHours(employeeIndex) {
    var totalHours = 0;
    var workHours = employees[employeeIndex].workHours;
    for (var i = 0; i < workHours.length; i++) {
        var entry = new Date(workHours[i].entryTime);
        var exit = new Date(workHours[i].exitTime);
        totalHours += (exit - entry) / (1000 * 60 * 60);
    }
    return totalHours;
}

// Örnek kullanım
addEmployee("John", "Doe", "2024-03-15");
recordWorkHours(0, "2024-03-15T08:00:00", "2024-03-15T18:00:00");
recordWorkHours(0, "2024-03-16T08:15:00", "2024-03-16T17:45:00");
var totalHours = calculateTotalWorkHours(0);
console.log("John Doe toplam çalışma saati: " + totalHours.toFixed(2) + " saat");
