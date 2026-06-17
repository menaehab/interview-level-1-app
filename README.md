## Interview Task

You are required to build a simple **Expense Tracker mobile application** using Flutter that consumes this API.

### App Requirements

The application should include the following features:

### 1. Authentication
- User can register a new account
- User can log in with email and password
- Store authentication token securely
- User can log out

---

### 2. Expenses Management
- Display a list of all expenses
- Add a new expense (reason, amount)
- Update an existing expense
- Delete an expense

---

### 3. UI Requirements
- Simple clean UI
- Loading indicators for API calls
- Error handling (show proper error messages)
- Empty state when no expenses exist

---

### 4. Technical Requirements
- Use REST API (this backend)
- Use Bearer Token authentication
- Use state management (Provider / Bloc / Riverpod - candidate choice)
- Handle API errors properly (401, validation errors, etc.)

---

### 5. Bonus (Optional)
- Search expenses
- Pagination support
- Local caching
- Clean architecture
- Proper folder structure

---

### API Base URL

```bash
http://127.0.0.1:8000/api 
```

---

### Authentication
All protected routes require:

```bash
Authorization: Bearer {token}
```
---

### Notes
- Focus on functionality more than UI design
- Clean code and structure will be evaluated
- Proper API integration is required
