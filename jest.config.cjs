module.exports = {
  testEnvironment: 'jest-environment-jsdom',
  roots: ['<rootDir>/tests'],
  setupFilesAfterEnv: ['@testing-library/jest-dom'],
};
