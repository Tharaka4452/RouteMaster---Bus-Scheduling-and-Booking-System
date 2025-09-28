# Contributing to RouteMaster

Thank you for your interest in contributing to RouteMaster! This document provides guidelines and information for contributors.

## Table of Contents

- [Code of Conduct](#code-of-conduct)
- [Getting Started](#getting-started)
- [Development Setup](#development-setup)
- [How to Contribute](#how-to-contribute)
- [Reporting Issues](#reporting-issues)
- [Submitting Changes](#submitting-changes)
- [Coding Standards](#coding-standards)
- [Testing](#testing)
- [Documentation](#documentation)

## Code of Conduct

This project adheres to a Code of Conduct. By participating, you are expected to uphold this code. Please report unacceptable behavior to the project maintainers.

## Getting Started

1. **Fork the Repository**
   - Click the "Fork" button on the GitHub repository page
   - Clone your fork locally:
     ```bash
     git clone https://github.com/yourusername/RouteMaster.git
     cd RouteMaster
     ```

2. **Set Up Development Environment**
   - Install XAMPP or similar local server environment
   - Ensure PHP 7.4+ and MySQL are available
   - Set up the database using the provided SQL file

## Development Setup

### Prerequisites
- XAMPP (Apache + MySQL + PHP)
- Git
- A modern web browser
- Code editor (VS Code, PhpStorm, etc.)

### Installation Steps

1. **Database Setup**
   ```bash
   # Start XAMPP services
   # Open phpMyAdmin (http://localhost/phpmyadmin)
   # Create database 'busschedulings'
   # Import IWT_KDY/busschedulings.sql
   ```

2. **Configuration**
   - Update `IWT_KDY/KNDUNI_20/config.php` with your database credentials
   - Place project in XAMPP `htdocs` folder
   - Access via `http://localhost/RouteMaster/IWT_KDY/KNDUNI_20/`

## How to Contribute

### Types of Contributions

We welcome various types of contributions:

- **Bug Reports**: Report issues you encounter
- **Feature Requests**: Suggest new features or improvements
- **Code Contributions**: Fix bugs or implement features
- **Documentation**: Improve documentation and examples
- **Testing**: Help test the application and report issues
- **UI/UX Improvements**: Enhance the user interface

### Contribution Workflow

1. **Create an Issue**
   - Check existing issues first
   - Use appropriate issue templates
   - Provide detailed information

2. **Create a Branch**
   ```bash
   git checkout -b feature/your-feature-name
   # or
   git checkout -b bugfix/issue-number
   ```

3. **Make Changes**
   - Follow coding standards
   - Write clear commit messages
   - Test your changes thoroughly

4. **Submit a Pull Request**
   - Use the pull request template
   - Reference related issues
   - Request reviews from maintainers

## Reporting Issues

### Bug Reports

When reporting bugs, please include:

- **Description**: Clear description of the issue
- **Steps to Reproduce**: Detailed steps to reproduce the bug
- **Expected Behavior**: What you expected to happen
- **Actual Behavior**: What actually happened
- **Environment**: Browser, OS, PHP version, etc.
- **Screenshots**: If applicable, include screenshots

### Feature Requests

For feature requests, please include:

- **Use Case**: Why this feature would be useful
- **Proposed Solution**: How you envision the feature working
- **Alternatives**: Other solutions you've considered
- **Additional Context**: Any other relevant information

## Submitting Changes

### Pull Request Process

1. **Update Documentation**
   - Update README.md if needed
   - Add comments to code changes
   - Update any relevant documentation

2. **Testing**
   - Test your changes thoroughly
   - Ensure no existing functionality is broken
   - Test on different browsers if UI changes are made

3. **Code Review**
   - Address any feedback from reviewers
   - Make necessary changes
   - Ensure all checks pass

### Commit Message Guidelines

Use clear, descriptive commit messages:

```
feat: add user authentication system
fix: resolve payment processing bug
docs: update installation instructions
style: improve CSS formatting
refactor: optimize database queries
test: add unit tests for booking system
```

## Coding Standards

### PHP Standards

- Follow PSR-12 coding standards
- Use meaningful variable and function names
- Add comments for complex logic
- Validate and sanitize all user inputs
- Use prepared statements for database queries

### HTML/CSS Standards

- Use semantic HTML5 elements
- Follow responsive design principles
- Use consistent indentation (2 or 4 spaces)
- Organize CSS with logical grouping
- Use meaningful class names

### JavaScript Standards

- Use modern ES6+ features
- Follow consistent naming conventions
- Add error handling
- Comment complex functions
- Use meaningful variable names

### File Organization

- Keep related files together
- Use consistent naming conventions
- Separate concerns (HTML, CSS, PHP, JS)
- Organize assets in appropriate directories

## Testing

### Manual Testing

Before submitting changes:

1. **Functionality Testing**
   - Test all user flows
   - Verify database operations
   - Check form validations
   - Test payment processing (use test mode)

2. **Cross-browser Testing**
   - Test on Chrome, Firefox, Safari, Edge
   - Check mobile responsiveness
   - Verify JavaScript functionality

3. **Security Testing**
   - Test input validation
   - Check for SQL injection vulnerabilities
   - Verify authentication and authorization

### Test Cases

When adding new features, consider testing:

- Happy path scenarios
- Edge cases and error conditions
- Input validation
- Database constraints
- User permissions

## Documentation

### Code Documentation

- Add PHPDoc comments for functions
- Document complex algorithms
- Explain business logic
- Update inline comments when modifying code

### User Documentation

- Update README.md for new features
- Add installation instructions for new dependencies
- Document configuration changes
- Provide usage examples

## Getting Help

If you need help:

1. **Check Documentation**: Review README.md and existing documentation
2. **Search Issues**: Look through existing issues and discussions
3. **Ask Questions**: Create an issue with the "question" label
4. **Join Discussions**: Participate in project discussions

## Recognition

Contributors will be recognized in:

- README.md contributors section
- Release notes
- Project documentation

## License

By contributing to RouteMaster, you agree that your contributions will be licensed under the same license as the project.

---

Thank you for contributing to RouteMaster! Your efforts help make bus travel more accessible and convenient for everyone. 🚌
