# Parcijalni ispit - PHP To-Do Aplikacija

## 🧾 Zadatak: Izrada jednostavne web aplikacije za upravljanje zadacima (To-Do list)

### 🆕 Početak

1. klonirati repozitorij - hint: `clone`
2. napraviti svoj branch i checkoutati se na vaš branch - hint: `checkout -b` (branch se treba zvati imePrezime - npr. ivoIvic)
3. izvršiti `dbscripts.sql` sql skriptu na svojoj bazi
4. napraviti aplikaciju
5. pushati na repozitorij na svoj branch
6. napraviti PR
7. čekati pregled (rezultat dobivate kroz PR komentar)

---

### 📋 Opis zadatka
Cilj je razviti jednostavnu web aplikaciju za upravljanje zadacima koristeći PHP i MVC (Model-View-Controller) arhitekturu. Aplikacija će upravljati jednom, centralnom listom zadataka.

Aplikacija treba omogućiti sve osnovne funkcionalnosti: kreiranje, pregled, ažuriranje (npr. označavanje zadatka kao dovršenog) i brisanje zadataka.

---

### ✅ Zadatak
Zadatak je implementacija Backend Aplikacije kroz MVC pattern.

Ono što trebate napraviti je implementirati CRUD (Create, Read, Update, Delete) logiku za zadatke. Korisnik mora moći dodati novi zadatak u listu, vidjeti sve zadatke, označiti zadatak kao dovršen (status se mijenja) i obrisati ga.

Rješenje treba obuhvaćati sljedeće:
- router: klasa ili običan php file odgovorna za prepoznavanje URL-a i pozivanje odgovarajućeg kontrolera
- database: klasa za uspostavljanje konekcije s bazom podataka (koristeći PDO)
- controller: bazni kontroler i specifični TodoController za upravljanje zadacima (dodatni bodovi za OOP)
- model: Todo model koji sadrži svu poslovnu logiku vezanu za zadatke
- view: datoteke koje sadrže HTML kod za prikaz korisničkog sučelja

---

### ➡️ KRENITE
SRETNO! 💪