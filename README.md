# 使用者管理系統 (User Management System)

這是一個用於管理使用者帳戶的系統，具備管理者和一般使用者的分流功能。管理者可以管理使用者資料、檢視並刪除帳戶、更新使用者信息等功能，而一般使用者可以檢視自己的帳戶資料並更新個人信息。系統包含登入、註冊、查詢、會議和費用頁面等功能，適合作為教學和內部管理範例系統使用。

## 目錄
- [專案說明](#專案說明)
- [安裝步驟](#安裝步驟)
- [功能特性](#功能特性)
- [文件結構](#文件結構)
- [使用方式](#使用方式)
- [常見問題](#常見問題)

## 專案說明
本專案的設計旨在提供一個簡易的後端用戶管理系統。該系統具備權限管理，分為管理者和一般使用者：
- **管理者** (role = 'M') 可以：
  - 查詢與管理所有使用者的資料
  - 編輯、刪除一般使用者的帳戶
- **一般使用者** (role = 'U') 可以：
  - 查看並編輯自己的帳戶資料

## 安裝步驟
### 環境需求
- PHP 7.4 或更高版本
- MySQL 資料庫
- Apache 伺服器或任何支持 PHP 的伺服器環境
- Git (如果要進行版本控制)
- Composer (可選，用於安裝 PHP 套件)

### 安裝與設定
1. **克隆專案**
   ```bash
   git clone <Your Repository URL>
   cd Your_Project_Folder
   ```

2. **安裝依賴套件** (如有使用 Composer)
   ```bash
   composer install
   ```

3. **配置資料庫**
   - 在 `db.php` 文件中，設置您的資料庫連接信息：
     ```php
     $servername = "localhost";
     $dbUsername = "root";
     $dbPassword = "";
     $dbname = "practice";
     ```

4. **導入資料庫**
   - 在 MySQL 中創建一個新的資料庫，並導入提供的 SQL 文件以初始化資料庫結構和表。

5. **啟動伺服器**
   使用 Apache 或其他支持 PHP 的伺服器啟動專案，或者使用 PHP 內建伺服器：
   ```bash
   php -S localhost:8000
   ```

6. **訪問應用程式**
   在瀏覽器中打開 [http://localhost:8000](http://localhost:8000) 來使用系統。

## 功能特性
- **登入與登出**：用戶可以進行安全的登入和登出。
- **註冊**：新使用者可以註冊帳戶。
- **權限管理**：分為管理者和一般使用者，確保資料安全性。
- **個人資料更新**：用戶可以編輯自己的密碼和其他個人信息。
- **查詢功能**：管理者可以檢視和管理所有使用者的資料。

## 文件結構
```
├── db.php                # 資料庫連接配置文件
├── session.php           # 集中化管理 session 文件
├── login.php             # 登入頁面
├── register.php          # 註冊頁面
├── status.php            # 使用者的首頁狀態頁面
├── admin.php             # 管理者頁面，包含管理功能
├── navbar.php            # 導覽列
├── edit_profile.php      # 使用者編輯個人資料頁面
├── Query.php             # 查詢頁面
├── conference.php        # 會議頁面
├── fee.php               # 費用頁面
├── insert.php            # 管理者新增資料頁面
├── update.php            # 管理者更新資料頁面
└── logout.php            # 登出功能
```

## 使用方式
1. **登入與註冊**
   - 首次使用時，請先註冊帳戶，並分配角色（管理者或一般使用者）。
   - 登入後，會根據使用者角色自動分配相應的權限和頁面訪問權限。

2. **管理功能**
   - 管理者可以在 `admin.php` 頁面上，刪除、編輯使用者的帳號、名稱、密碼等。
   - 管理者只能查看或操作一般使用者的帳號，無法更改管理者帳戶的資料。

3. **個人資料更新**
   - 登入後，點擊 `edit_profile.php` 進入編輯頁面，可以更新自己的名稱和密碼。

## 常見問題
1. **登入失敗或出現錯誤訊息**
   - 檢查資料庫連接是否正確，以及使用者帳號是否存在。

2. **權限錯誤**
   - 確保使用者在 `session.php` 中獲得了正確的角色分配。如果需要新增管理者帳戶，請在資料庫中手動設定。

3. **無法編輯其他使用者的資料**
   - 此功能僅限管理者帳戶，並且無法編輯其他管理者帳戶。

## 貢獻指南
如有興趣協助開發此專案或提出改進建議，請提交 Pull Request 或 Issue。